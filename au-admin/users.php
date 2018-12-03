<?php
session_start();
if(!isset($_SESSION['ad_id'])){
   header("Location: login.php?login=error");
   exit();
}
else{
  
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Users</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.17/jquery-ui.min.js"></script>

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="../index.php">
                                <a class="navbar-brand" href="../index.php">Overfollowers</a>
                            </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="dashboard.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                          
                        </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                        <a class="navbar-brand" href="../index.php">Overfollowers</a>
                    </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="has-sub">
                            <a class="js-arrow" href="dashboard.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                                <a href="users">
                                <i class="fas fa-table"></i>Users</a>
                            </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 new support tickets</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                  
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="content">
                                            <?php
                                            $name = $_SESSION['ad_first'];
                                         echo "<a class='js-acc-btn' href='#'>$name</a>";
                                            ?>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                            <div class="content">
                                                    <h5 class="name">
                                                        <?php
                                                        $fn = $_SESSION['ad_first'];
                                                        $ln = $_SESSION['ad_last'];

                                                        echo "<a href='#'>$fn $ln</a>";
                                                        ?>

                                                    </h5>
                                                    <?php
                                                    $em = $_SESSION['ad_email'];
                                                   echo "<span class='email'>$em</span>";
                                                    ?>
                                                   
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                 
                      
                          
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">User Account Management</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        
                                    
                               
                                <form method="POST">
                                <input class="form-control" id="searchuser" name="searchuser" type="text" placeholder="Search.." style="border-radius: 10px; width: 500px">
                              <!-- <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="submit">Search</button> !-->
                            </form>
                            <?php
                                           
                                                if(isset($_POST['searchuser'])){
                                                    //Then we include the database connection
                                                    include_once 'includes/db.inc.php';
                                                   
                                                    $search = $_POST['searchuser'];
                                                    if (empty($search)) {
                                                        echo "<p>No user has been searched</p>";
                                                   }
                                                   else{
                                                        //Check if username exists in the database USING PREPARED STATEMENTS
                                                        $sql = "SELECT * FROM users WHERE user_uid=?;";
                                                        //Create a prepared statement
                                                        global $stmt;
                                                        $stmt = mysqli_stmt_init($db);
                                                        //Check if prepared statement fails
                                                   
                                                   
                                                        if(!mysqli_stmt_prepare($stmt, $sql)) {
                                                           echo "<p>Database fetching failed.</p>";
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

                                                
                                                                  
                                                              
                                                               
                                                                   
                                                     } else {
                                                         echo "<p>Couldn't find the user.</p>";
                                                     }
                                                       }
                                                   }
                                                  
                                                   }
                                                   else{
                                                       
                                                   }
                                            


?>

                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>name</th>
                                                <th>email</th>
                                                <th>username</th>
                                                <th>password</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tr-shadow">

                                        
                                           
                                                <?php
                                               if(!isset($_SESSION['uu_id']) || !$_SESSION['uu_first'] || !$_SESSION['uu_last'] || !$_SESSION['uu_email'] || !$_SESSION['uu_uid'] || !$_SESSION['uu_pwd']){
                                             
                                            }else{
                                                $id = $_SESSION['uu_id'];
                                                echo "<td>$id</td>";
                                            }
                                               
                                                ?>
                                                 <?php
                                               if(!isset($_SESSION['uu_id']) || !$_SESSION['uu_first'] || !$_SESSION['uu_last'] || !$_SESSION['uu_email'] || !$_SESSION['uu_uid'] || !$_SESSION['uu_pwd']){
                                             }
                                             else{
                                                $first = $_SESSION['uu_first'];
                                                $last = $_SESSION['uu_last'];
                                                 echo "<td>$first $last</td>";
                                             }
                                             
                                                ?>
                                                <td>
                                                    
                                                    <?php
                                                    if(!isset($_SESSION['uu_id']) || !$_SESSION['uu_first'] || !$_SESSION['uu_last'] || !$_SESSION['uu_email'] || !$_SESSION['uu_uid'] || !$_SESSION['uu_pwd']){
                                                    }
                                                    else {$emm = $_SESSION['uu_email'];
                                                    echo "<span class='block-email'>$emm</span>";}
                                                    ?>
                                                    
                                                </td>
                                                <?php
                                                if(!isset($_SESSION['uu_id']) || !$_SESSION['uu_first'] || !$_SESSION['uu_last'] || !$_SESSION['uu_email'] || !$_SESSION['uu_uid'] || !$_SESSION['uu_pwd']){
                                                }
                                                else {$uid = $_SESSION['uu_uid'];
                                                echo "<td class='desc'>$uid</td>";}
                                                ?>
                                                
                                                <?php
                                                if(!isset($_SESSION['uu_id']) || !$_SESSION['uu_first'] || !$_SESSION['uu_last'] || !$_SESSION['uu_email'] || !$_SESSION['uu_uid'] || !$_SESSION['uu_pwd']){
                                                }
                                                else {$pwd = $_SESSION['uu_pwd'];
                                                echo "<td class='desc'>$pwd</td>";}
                                                ?>
                                                <!--
                                                <td>
                                                    <span class="status--process">Processed</span>
                                                </td>!-->   
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-toggle="modal" data-target="#editmodal" title="Edit" >
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </div>

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                          <!-- DATA TABLE -->
                          <h3 class="title-5 m-b-35">List Account Management</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        
                                    
                               
                                <form method="POST">
                                <input class="form-control" id="searchaccount" name="searchaccount" type="text" placeholder="Search.." style="border-radius: 10px; width: 500px">
                              <!-- <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="submit">Search</button> !-->
                            </form>
                            <?php
                                           
                                                if(isset($_POST['searchaccount'])){
                                                    //Then we include the database connection
                                                    include_once 'includes/db.inc.php';
                                                   
                                                    $searchacc = $_POST['searchaccount'];
                                                    if (empty($searchacc)) {
                                                        echo "<p>No user has been searched</p>";
                                                   }
                                                   else{
                                                        //Check if username exists in the database USING PREPARED STATEMENTS
                                                        $sqll = "SELECT * FROM accounts WHERE account_name=?;";
                                                        //Create a prepared statement
                                                        global $stmtt;
                                                        $stmtt = mysqli_stmt_init($db);
                                                        //Check if prepared statement fails
                                                   
                                                   
                                                        if(!mysqli_stmt_prepare($stmtt, $sqll)) {
                                                           echo "<p>Database fetching failed.</p>";
                                                        }
                                                        else {
                                                           //Bind parameters/data to the placeholder (?) in our $sql
                                                           mysqli_stmt_bind_param($stmtt, "s", $searchacc);
                                                   
                                                           //Run query in database
                                                           mysqli_stmt_execute($stmtt);
                                                   
                                                           //Get results from query
                                                     $resultt = mysqli_stmt_get_result($stmtt);
                                                   
                                                           //If we had a result, which means the username does exist, then assign the database row data to $row.
                                                           if ($row = mysqli_fetch_assoc($resultt)) {
                                                               //De-hashing the password using the password provided by the user, and the password from the database, to see if they match.
                                                              $_SESSION['acc_id'] = $row['account_id'];
                                                           
                                                                $_SESSION['acc_name'] = $row['account_name'];
                                                                $_SESSION['acc_description'] = $row['account_description'];
                                                                $_SESSION['acc_list'] = $row['list_points'];
                                                                $_SESSION['acc_redirect'] = $row['account_redirect'];
                                                                $_SESSION['acc_img'] = $row['account_img'];
                                                                $_SESSION['acc_owner'] = $row['account_owner'];
                                                                $_SESSION['acc_status'] = $row['account_status'];


                                                
                                                                  
                                                              
                                                               
                                                                   
                                                     } else {
                                                         echo "<p>Couldn't find the account.</p>";
                                                     }
                                                       }
                                                   }
                                                  
                                                   }
                                                   else{
                                                       
                                                   }
                                            


?>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2" style="overflow-x: auto;">
                                        <thead>
                                            <tr>
                                            
                                                <th>id</th>
                                                <th>name</th>
                                                <th>description</th>
                                                <th>list points</th>
                                                <th>redirect</th>
                                                <th>image</th>
                                                <th>owner id</th>
                                                <th>status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tr-shadow">

                                               
                                           
                                                <?php
                                               if(!isset($_SESSION['acc_id']) ){
                                             
                                            }else{
                                                $accid = $_SESSION['acc_id'];
                                                echo "<td>$accid</td>";
                                            }
                                               
                                                ?>
                                                 <?php
                                               if(!isset($_SESSION['acc_name']) ){
                                            }
                                             else{
                                                $name = $_SESSION['acc_name'];
                                                 echo "<td>$name</td>";
                                             }
                                             
                                                ?>
                                                <td>
                                                    
                                                    <?php
                                               if(!isset($_SESSION['acc_description']) ){
                                            }
                                                    else {$descr = $_SESSION['acc_description'];
                                                    echo "<span class='block-email'>$descr</span>";}
                                                    ?>
                                                    
                                                </td>
                                                <?php
                                               if(!isset($_SESSION['acc_list']) ){
                                            }
                                                else {$list = $_SESSION['acc_list'];
                                                echo "<td class='desc'>$list</td>";}
                                                ?>
                                                
                                                <?php
                                               if(!isset($_SESSION['acc_redirect']) ){
                                            }
                                                else {$red = $_SESSION['acc_redirect'];
                                                echo "<td class='desc'>$red</td>";}
                                                ?>

                                                 <?php
                                               if(!isset($_SESSION['acc_img']) ){
                                            }
                                                else {$image = $_SESSION['acc_img'];
                                                echo "<td class='desc'>$image</td>";}
                                                ?>

                                                 <?php
                                               if(!isset($_SESSION['acc_owner']) ){
                                            }
                                                else {$own = $_SESSION['acc_owner'];
                                                echo "<td class='desc'>$own</td>";}
                                                ?>

                                                 <?php
                                               if(!isset($_SESSION['acc_status']) ){
                                            }
                                                else {$stat = $_SESSION['acc_status'];
                                                echo "<td class='desc'>$stat</td>";}
                                                ?>
                                  
                                                <td>
                                                    <div class="table-data-feature">
                                                        <button class="item" data-toggle="modal" data-target="#editmodal" title="Edit" >
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </div>

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
  <!-- Modal -->
  <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="login-form">
                            <form name="editaccount" action="includes/editacc.inc.php" method="POST">
                            <div class="form-group">
                                    <label>Firstname</label>
                                    <input class="au-input au-input--full" type="text" name="firstname" placeholder="Firstname">
                                </div>
                                <div class="form-group">
                                    <label>Lastname</label>
                                    <input class="au-input au-input--full" type="text" name="lastname" placeholder="Lastname">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
                            </form>
                            
                        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal end -->
   <!-- Jquery JS-->
	<script src="vendor/jquery-3.2.1.min.js"></script>
	<!-- Bootstrap JS-->
	<script src="vendor/bootstrap-4.1/popper.min.js"></script>
	<script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
	<!-- Vendor JS       -->
	<script src="vendor/slick/slick.min.js">
	</script>
	<script src="vendor/wow/wow.min.js"></script>
	<script src="vendor/animsition/animsition.min.js"></script>
	<script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
	</script>
	<script src="vendor/counter-up/jquery.waypoints.min.js"></script>
	<script src="vendor/counter-up/jquery.counterup.min.js">
	</script>
	<script src="vendor/circle-progress/circle-progress.min.js"></script>
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
	<script src="vendor/chartjs/Chart.bundle.min.js"></script>
	<script src="vendor/select2/select2.min.js">
	</script>

	<!-- Main JS-->
	<script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
