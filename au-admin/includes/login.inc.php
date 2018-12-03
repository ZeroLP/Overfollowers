<?php

//First we start a session
session_start();

//We then check if the user has clicked the login button
if (isset($_POST['submit'])) {

    //Then we include the database connection
    include_once 'db.inc.php';
    //And we get the data from the login form
    $uiid = $_POST['username'];
    $pwwd = $_POST['password'];

    //Error handlers
    //Error handlers are important to avoid any mistakes the user might have made when filling out the form!
    //Check if inputs are empty
    if (empty($uiid) || empty($pwwd)) {
        header("Location: ../login.php?login=empty");
        exit();
    }
    else {
        //Check if username exists in the database USING PREPARED STATEMENTS
        $sql = "SELECT * FROM admins WHERE admin_username='$uiid'";
        //Create a prepared statement
        $stmt = mysqli_stmt_init($db);
        //Check if prepared statement fails
        if(!mysqli_stmt_prepare($stmt, $sql)) {
           header("Location: ../login.php?login=errorfail");
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
               if($pwwd != $row['admin_password']){
                header("Location: ../login.php?login=passwordnotmatch");
                exit();
               }
               elseif($pwwd == $row['admin_password']){
                   //Set SESSION variables and log user in
                    $_SESSION['ad_id'] = $row['admin_id'];
                    $_SESSION['ad_first'] = $row['admin_first'];
                    $_SESSION['ad_last'] = $row['admin_last'];
                    $_SESSION['ad_email'] = $row['admin_email'];
                    $_SESSION['ad_uid'] = $row['admin_username'];
                    header("Location: ../dashboard.php");
                    exit();
               }
                
                    
      } else {
        header("Location: ../login.php?login=noresult");
            exit();
      }
        }
    }

    //Close the prepared statement
    mysqli_stmt_close($stmt);

} else {
    header("Location: ../index.php?login=notsubmittedthrbt");
    exit();
}

?>