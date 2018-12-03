<?php
   session_start();
   if(isset($_SESSION['u_id'])){
    $name = $_SESSION['u_first'];
    $lname = $_SESSION['u_last'];
}
else{
    header("Location: ../index.php?login=error");
    exit();
}
?>
<html>
   
   <head>
      <title>Dashboard Page</title>
      <?php
    include 'header.php';
   ?>
   </head>
   
   <body style="bgcolor: #FFFFFF">
       <!-- ***** Search Form Area ***** -->
    <div class="if-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form action="#" method="get">
                        <input type="search" name="caviarSearch" id="search" placeholder="Search Your Desire Instagrammer Type">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
	  <!-- ***** Search Form Area ***** -->
      <div class="if-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form action="#" method="get">
                        <input type="search" name="caviarSearch" id="search" placeholder="Search Your Desire Instagrammer Type">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header" style="background-color: #120325; border-color: #120325; height: 80px">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index.php">Overfollowers</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ifNav" aria-controls="ifNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <!-- Nav -->
                        <div class="collapse navbar-collapse" id="ifNav">
                            <ul class="navbar-nav mr-auto" id="ifMenu">
                                    <a class="nav-link" href="index.php">Home</a>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listing</i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                            </ul>
                            <!-- Search btn -->
                            <div class="if-search-btn">
                                <a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i> Search</a>
                            </div>
                            <!-- Signin btn -->
                              
                            <?php
                             if(isset($_SESSION['u_id'])){
                                echo '<form class="form-logout" action="includes/logout.inc.php" method="POST">
<button class="btn btn-sm btn-light btn-block" name="submit" type="submit">logout</button>
                              </form>';
                            }
                            else{
                            }
                            ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    
    <section class="if-welcome-area bg-img bg-overlay" style="background-image: url(img/bg-img/hero-1.jpg);">
        
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10"> 
                <div class="container">
    
                <div>
                <?php   
        echo "<h1 style='color: #ffffff; text-align: center'>Welcome back $name $lname!</h1>";
    ?>

        <div class="container" style="background-color: #341a79; padding: 50px; border-radius: 15px">
                    <?php
                include_once 'includes/config.inc.php';
                $sesh = $_SESSION['u_id'];
                $sql = "SELECT * FROM accounts WHERE account_owner = '$sesh';";
                $result = mysqli_query($db, $sql);
                $resultcheck = mysqli_num_rows($result);
            
                if ($resultcheck == 0) {
                    echo ' <form class="form-logout" action="../addaccount.php">
                    <button type="submit" class="btn btn-primary" style="margin: auto">Add Account</button>
                                          </form>'; 
            
                     echo "<p style='color: #ffffff; text-align: center'>No account has been found.</p>";
                    exit(); #stops the script after this line - same as return;
                }
                else{
                    if($row = mysqli_fetch_assoc($result)){
                    $nnn = $row['account_name'];
                    $desc = $row['account_description'];
                    $_SESSION['acc_id'] = $row['account_id'];
                    $imgg = $row['account_img'];
                    echo "
    <div class='container-fluid' style='margin-top: 30px'>
                    <div class='row'>
                      <div class='card-deck' style='margin: auto;'>
                        <div class='card' style='max-width: 420px;'>
                          <img class='card-img-top' src='../accpfp/$imgg' alt='Card image cap' style='max-width: 420px; max-height: 315px;'>
                          <div class='card-block'>
                        <h4 class='card-title' style='text-align: center'>@$nnn</h4>
                        <p class='card-text' style='text-align: center'>$desc</p>
                        <div style='margin-left: 25%'>
                        <a href='../editaccount.php' class='btn btn-primary' style='display: inline-block;
                        margin: 5px;'>Edit</a>
                        <a href='../editaccount.php' class='btn btn-primary' style='display: inline-block;
                    margin: 5px;'>List</a> <a href='../editaccount.php' class='btn btn-primary' style='
                    display: inline-block;
    margin: 5px;'>Delete</a> 
    <a href='../upload.php' class='btn btn-primary' name='submit' style='
                    display: inline-block;
    margin: 5px;'>Update Picture</a> 
    <a href='../upgrade.php' class='btn btn-primary' name='submit' style='
                    display: inline-block;
    margin: 5px;'>Upgrade</a> 
    </div>
                        
                        </div>
                        </div>
                        </div>
                      </div>";
                    }
            }
    
                    ?>
            
  
</div>
                        </div>
</div> <!-- /container -->

                </div>
            </div>
        </div>
        <!-- Hero Social Btn 
           <div class="hero-social-btn">
            <div class="social-title d-flex align-items-center">
                <h6>Follow us on Social Media</h6>
                <span></span>
            </div>
            <div class="social-btns">
                <a href="#"><i class="fa fa-linkedin" aria-haspopup="true"></i></a>
                <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-haspopup="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-haspopup="true"></i></a>
            </div>
        </div>
        -->
     
    </section>


      
            
               
    <!-- ***** Header Area End ***** -->
 <!-- ****** Footer Area End ****** -->

    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
   </body>
</html>