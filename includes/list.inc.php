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

$aidd = $_SESSION['u_id'];
     
    
    $sql = "SELECT * FROM accounts WHERE (account_owner='$aidd' AND bump='Available');";
    //Create a prepared statement
    $stmt = mysqli_stmt_init($db);
    //Check if prepared statement fails
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../login.php?login=error");
        exit();
    }
    //If the prepared statement didn't fail, then continue
    else {
        

        //Run query in database
        mysqli_stmt_execute($stmt);

        //Get results from query
  $result = mysqli_stmt_get_result($stmt);

        //If we had a result, which means the username does exist, then assign the database row data to $row.
        if ($row = mysqli_fetch_assoc($result)) {
         $adding = $row['list_points'];
         $pt = $adding += 3;
        $sql1 = "UPDATE accounts SET list_points='$pt' WHERE account_owner='$aidd';";

            mysqli_query($db, $sql);
            
                
  } else {
    header("Location: ../list.php?list=unavaiable");
    exit();
  
  }



    }
  
    }

    


else{
    header("Location: ../signup.php");
    exit(); #stops the script after this line - same as return;
}

?>