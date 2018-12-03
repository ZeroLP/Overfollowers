<?php
session_start();
if(!isset($_SESSION['u_id'])){
    header("Location: ../login.php");
    exit();
}
else{

}
if (isset($_POST['submit'])) {

    include_once 'config.inc.php';
    $an = mysqli_real_escape_string($db, $_POST['accname']);
    $dsc = mysqli_real_escape_string($db, $_POST['desc']);
    $igu = mysqli_real_escape_string($db, $_POST['igusername']);

    //Error handlers
    //Check for empty fields

    if ($an="" || $dsc="" || $igu="") {
        header("Location: ../addaccount.php?addaccount=empty");
        exit(); #stops the script after this line - same as return;
    }
    else{
     // Check if input char are valid

     if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
        header("Location: ../addaccount.php?addaccount=invalid");
        exit(); #stops the script after this line - same as return;
    }
    else{
     
    
        $sql = "SELECT * FROM accounts WHERE account_redirect = '$igu';";
        $result = mysqli_query($db, $sql);
        $resultcheck = mysqli_num_rows($result);
    
        if ($resultcheck > 0) {
            header("Location: ../addaccount.php?addaccount=usertaken");
            exit(); #stops the script after this line - same as return;
        }
        else{
        $acnn = mysqli_real_escape_string($db, $_POST['accname']);
        $dsccs = mysqli_real_escape_string($db, $_POST['desc']);
        $iguu = mysqli_real_escape_string($db, $_POST['igusername']);
        $owner = mysqli_real_escape_string($db, $_SESSION['u_id']);
        //insert the user into the db
        $sql = "UPDATE accounts SET account_name='$acnn', account_description='$dsccs', account_redirect='$iguu' WHERE account_owner='$owner';";
        
        mysqli_query($db, $sql);
        header("Location: ../dashboard.php");
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