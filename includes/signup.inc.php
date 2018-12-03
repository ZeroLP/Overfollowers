<?php


if (isset($_POST['submit'])) {

    include_once 'config.inc.php';
    $first = mysqli_real_escape_string($db, $_POST['first']);
    $last = mysqli_real_escape_string($db, $_POST['last']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $uid = mysqli_real_escape_string($db, $_POST['uid']);
    $pwd = mysqli_real_escape_string($db, $_POST['pwd']);

    //Error handlers
    //Check for empty fields

    if ($first="" || $last="" || $email="" || $uid="" || $pwd="") {
        header("Location: ../signup.php?signup=empty");
        exit(); #stops the script after this line - same as return;
    }
    else{
     // Check if input char are valid

     if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
        header("Location: ../signup.php?signup=invalid");
        exit(); #stops the script after this line - same as return;
    }
    else{
     
    
        $sql = "SELECT * FROM users WHERE user_uid = '$uid';";
        $result = mysqli_query($db, $sql);
        $resultcheck = mysqli_num_rows($result);
    
        if ($resultcheck > 0) {
            header("Location: ../signup.php?signup=usertaken");
            exit(); #stops the script after this line - same as return;
        }
        else{
        $fn = mysqli_real_escape_string($db, $_POST['first']);
        $ln = mysqli_real_escape_string($db, $_POST['last']);
        $em = mysqli_real_escape_string($db, $_POST['email']);
        $id = mysqli_real_escape_string($db, $_POST['uid']);
        $pass = mysqli_real_escape_string($db, $_POST['pwd']);
        //insert the user into the db
        $sql = "INSERT INTO users (user_first,user_last,user_email,user_uid,user_pwd) VALUES ('$fn','$ln','$em','$id','$pass');";

        
        mysqli_query($db, $sql);
        header("Location: ../login.php");
        exit(); #stops the script after this line - same as return;



    }
  
    }

    }

}
else{
    header("Location: ../signup.php");
    exit(); #stops the script after this line - same as return;
}

?>