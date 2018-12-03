<?php
session_start();
if(!isset($_SESSION['u_id'])){
    header("Location: ../login.php?noauth");
    exit();
}
else{

}
if (isset($_POST['submit'])) {

    include_once 'db.inc.php';
    $firstn = mysqli_real_escape_string($db, $_POST['firstname']);
    $lastn = mysqli_real_escape_string($db, $_POST['lastname']);
    $ema = mysqli_real_escape_string($db, $_POST['email']);
    $un = mysqli_real_escape_string($db, $_POST['username']);
    $pwdw = mysqli_real_escape_string($db, $_POST['password']);
    //Error handlers
    //Check for empty fields

    if ($firstn="" || $lastn="" || $ema="" || $un="" || $pwdw="" ) {
        header("Location: ../users.php?ediaccount=empty");
        exit(); #stops the script after this line - same as return;
    }
    else{
     // Check if input char are valid

     if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
        header("Location: ../users.php?editaccouont=invalid");
        exit(); #stops the script after this line - same as return;
    }
    else{
     
    
        $sql = "SELECT * FROM users WHERE user_uid = '$un';";
        $result = mysqli_query($db, $sql);
        $resultcheck = mysqli_num_rows($result);
    
        if ($resultcheck > 0) {
            header("Location: ../users.php?editaccount=usertaken");
            exit(); #stops the script after this line - same as return;
        }
        else{
            $firstnn = mysqli_real_escape_string($db, $_POST['firstname']);
            $lastnn = mysqli_real_escape_string($db, $_POST['lastname']);
            $emaa = mysqli_real_escape_string($db, $_POST['email']);
            $unn = mysqli_real_escape_string($db, $_POST['username']);
            $pwdww = mysqli_real_escape_string($db, $_POST['password']);
        //insert the user into the db
        $ll = $_SESSION['uu_id'];
        $sql = "UPDATE users SET user_first='$firstnn', user_last='$lastnn', user_email='$emaa', user_uid='$unn', user_pwd='$pwdww' WHERE user_id='$ll';";
        
        mysqli_query($db, $sql);
        header("Location: ../users.php");
        exit(); #stops the script after this line - same as return;



    }
  
    }

    }

}
else{
    header("Location: ../users.php?notfromsubmit");
    exit(); #stops the script after this line - same as return;
}

?>