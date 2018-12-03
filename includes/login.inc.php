<?php

	//First we start a session
	session_start();

	//We then check if the user has clicked the login button
	if (isset($_POST['submit'])) {

		//Then we include the database connection
		include_once 'config.inc.php';
		//And we get the data from the login form
		$uiid = $_POST['uid'];
		$pwwd = $_POST['pwd'];

		//Error handlers
		//Error handlers are important to avoid any mistakes the user might have made when filling out the form!
		//Check if inputs are empty
		if (empty($uiid) || empty($pwwd)) {
			header("Location: ../login.php?login=empty");
			exit();
		}
		else {
			//Check if username exists in the database USING PREPARED STATEMENTS
			$sql = "SELECT * FROM users WHERE user_uid=?";
			//Create a prepared statement
			$stmt = mysqli_stmt_init($db);
			//Check if prepared statement fails
			if(!mysqli_stmt_prepare($stmt, $sql)) {
			    header("Location: ../login.php?login=error");
			    exit();
			}
			//If the prepared statement didn't fail, then continue
			else {
				//Bind parameters/data to the placeholder (?) in our $sql
				mysqli_stmt_bind_param($stmt, "s", $uiid);

				//Run query in database
				mysqli_stmt_execute($stmt);

				//Get results from query
	      $result = mysqli_stmt_get_result($stmt);

				//If we had a result, which means the username does exist, then assign the database row data to $row.
				if ($row = mysqli_fetch_assoc($result)) {
					//De-hashing the password using the password provided by the user, and the password from the database, to see if they match.
                   if($pwwd != $row['user_pwd']){
					header("Location: ../login.php?login=error");
					exit();
				   }
				   elseif($pwwd == $row['user_pwd']){
					   //Set SESSION variables and log user in
						$_SESSION['u_id'] = $row['user_id'];
						$_SESSION['u_first'] = $row['user_first'];
						$_SESSION['u_last'] = $row['user_last'];
						$_SESSION['u_email'] = $row['user_email'];
						$_SESSION['u_uid'] = $row['user_uid'];
						header("Location: ../dashboard.php");
						exit();
				   }
					
						
	      } else {
	        header("Location: ../login.php?login=error");
				exit();
	      }
			}
		}

		//Close the prepared statement
		mysqli_stmt_close($stmt);

	} else {
		header("Location: ../index.php?login=error");
		exit();
	}
