<?php
	session_start();

if(isset($_POST['searchuser'])){
 //Then we include the database connection
 include_once 'db.inc.php';

 $search = $_POST['searchuser'];
 if (empty($search)) {
     header("Location: ../users.php?error");
        exit();
}
else{
     //Check if username exists in the database USING PREPARED STATEMENTS
     $sql = "SELECT * FROM users WHERE user_uid=?;";
     //Create a prepared statement
     $stmt = mysqli_stmt_init($db);
     //Check if prepared statement fails


     if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../users.php?error");
        exit();
     }
     else {
        //Bind parameters/data to the placeholder (?) in our $sql
        mysqli_stmt_bind_param($stmt, "s", $search);

        //Run query in database
        mysqli_stmt_execute($stmt);

        //Get results from query
  $result = mysqli_stmt_get_result($stmt);

        //If we had a result, which means the username does exist, then assign the database row data to $row.
        if ($row = mysqli_fetch_assoc($result)) {
            //De-hashing the password using the password provided by the user, and the password from the database, to see if they match.
           $_SESSION['uu_id'] = $row['user_id'];
                $_SESSION['uu_first'] = $row['user_first'];
                $_SESSION['uu_last'] = $row['user_last'];
                $_SESSION['uu_email'] = $row['user_email'];
                $_SESSION['uu_uid'] = $row['user_uid'];
                $_SESSION['uu_pwd'] = $row['user_pwd'];

                header("Location: ../users.php");

           
            
                
  } else {
      $_SESSION['not_found'];
    header("Location: ../users.php");
        exit();
  }
    }
}
//Close the prepared statement
mysqli_stmt_close($stmt);
}
else{
    header("Location: dashboard.php");
    exit();
}
?>