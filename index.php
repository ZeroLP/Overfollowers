<?php
session_start();
?>
<html lang="en">

<head>
   <?php
    include 'header.php';
   ?>

</head>

<body>

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
    <header class="header_area" id="header" style="background-color: #120325; border-color: #120325; height: 80px; min-width: 320px;">
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
                                    <a class="nav-link dropdown-toggle" href="./freelisting.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Listing</i></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contact</a>
                                </li>
                            </ul>
                            <!-- Search btn -->
                            <div class="if-search-btn">
                                <a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i> Search</a>
                            </div>
                            <?php
                               if(isset($_SESSION['u_id'])){
                                   echo '<div class="if-signin-btn">
                                   <a href="./dashboard.php">Dashboard</a>
                               </div>';
                               }
                               else{
                                   
                               }
                            ?>
                            
                            <?php
                            if(isset($_SESSION['u_id'])){
                                echo '<form class="form-logout" action="includes/logout.inc.php" method="POST">
<button class="btn btn-sm btn-light btn-block" name="submit" type="submit">logout</button>
                              </form>';
                            }
                            else{
                                echo '<div class="if-signin-btn">
                                <a href="./login.php">Sign in</a>
                            </div>
                            <div class="if-signin-btn">
                                <a href="./signup.php">Sign up</a>
                            </div>';
                            
                            }
                            ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->

    <section class="if-welcome-area bg-img bg-overlay" style="background-image: url(img/bg-img/hero-1.jpg);">
        
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="hero-content">
                        <h2 style="text-align: center;">Discover various types of Instagrammers!</h2>
                    </div>  
                </div>
            </div>
        </div>
    
     
    </section>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Catagory Area Start ***** -->

    <section class="if-catagory-area">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="all-catagories">
                        <div class="row">
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.2s">
                                    <div class="catagory-content">
                                        <img src="img/core-img/icon-1.png" alt="">
                                        <a href="#">
                                            <h6>Travel</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.4s">
                                    <div class="catagory-content">
                                        <img src="img/core-img/icon-2.png" alt="">
                                        <a href="#">
                                            <h6>Food</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.6s">
                                    <div class="catagory-content">
                                        <img src="img/core-img/icon-3.png" alt="">
                                        <a href="#">
                                            <h6>Shopping</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-sm-6 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.8s">
                                    <div class="catagory-content">
                                        <img src="img/core-img/icon-4.png" alt="">
                                        <a href="#">
                                            <h6>Beauty</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Catagory Area -->
                            <div class="col-12 col-md">
                                <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="1s">
                                    <div class="catagory-content">
                                        <img src="img/core-img/icon-5.png" alt="">
                                        <a href="#">
                                            <h6>Video</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
                <h1 style="text-align: center;">Ultimate Premiums - 2</h1>
            <div class="row">
              <div class="card-deck" style="max-width: 1100px; margin: auto; ">
                <div class="card" style="box-shadow: 0 10px 15px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-color: #6610f2; border-width: 10px">
                  <img class="card-img-top" src="http://www.ricoh-imaging.co.jp/english/products/q-s1/ex/img/bod_mainImg_01.jpg" alt="Card image cap">
                  <div class="card-block">
                    <h4 class="card-title" style="text-align: center">@sampleuser</h4>
                    <p class="card-text" style="text-align: center">Sample Text</p>
                    <a href="#" class="btn btn-primary" style="margin-left: 43%;">Follow</a>
                </div>
                </div>
                <div class="card" style="box-shadow: 0 10px 15px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-color: #6610f2; border-width: 10px">
                  <img class="card-img-top" src="https://kbob.github.io/images/sample-5.jpg" alt="Card image cap">
                  <div class="card-block">
                    <h4 class="card-title" style="text-align: center">@sampleuser</h4>
                    <p class="card-text" style="text-align: center">Sample Text</p>
                    <a href="#" class="btn btn-primary" style="margin-left: 43%;">Follow</a>
                </div>
                </div>
              </div>
            </div>
          </div>

        <div class="container-fluid" style="margin-top: 30px">
                <h1 style="text-align: center;">Premiums</h1>
                <div class="row">
                  <div class="card-deck" style="margin: auto;">

   <?php
                include_once 'includes/config.inc.php';
                $sql = "SELECT * FROM accounts Where account_status='Premium' order by list_points desc LIMIT 1;";
                $result = mysqli_query($db, $sql);
                
                    if($row = mysqli_fetch_assoc($result)){
                        $nnn = $row['account_name'];
                        $desc = $row['account_description'];
                        $acimg = $row['account_img'];
                        $igred = $row['account_redirect'];
                        echo "<div class='card' style='max-width: 420px;'>
                        <img class='card-img-top' src='../accpfp/$acimg' alt='Card image cap' style='width: 420px; max-height: 315px;'>
                        <div class='card-block'>
                      <h4 class='card-title' style='text-align: center'>@$nnn</h4>
                      <p class='card-text' style='text-align: center'>$desc</p>
                      <a href='https://instagram.com/$igred' class='btn btn-primary' style='margin-left: 43%;'>Follow</a>
                      </div>
                      </div>";
                        }

                
                   
              ?>


                     <?php
                include_once 'includes/config.inc.php';
                $sql = "SELECT * FROM accounts Where account_status='Premium' order by list_points desc LIMIT 1, 1;";
                $result = mysqli_query($db, $sql);
                
                    if($row = mysqli_fetch_assoc($result)){
                        $nnn = $row['account_name'];
                        $desc = $row['account_description'];
                        $acimg = $row['account_img'];
                        $igred = $row['account_redirect'];
                        echo "<div class='card' style='max-width: 420px;'>
                        <img class='card-img-top' src='../accpfp/$acimg' alt='Card image cap' style='width: 420px; max-height: 315px;'>
                        <div class='card-block'>
                      <h4 class='card-title' style='text-align: center'>@$nnn</h4>
                      <p class='card-text' style='text-align: center'>$desc</p>
                      <a href='https://instagram.com/$igred' class='btn btn-primary' style='margin-left: 43%;'>Follow</a>
                      </div>
                      </div>";
                        }

                
                   
              ?>
                  </div>
                </div>

                <div class="container-fluid" style="margin-top: 30px">
                        <div class="row">
                          <div class="card-deck" style="margin: auto;">
                          <?php
                include_once 'includes/config.inc.php';
                $sql = "SELECT * FROM accounts Where account_status='Premium' order by list_points desc LIMIT 2, 1;";
                $result = mysqli_query($db, $sql);
                
                    if($row = mysqli_fetch_assoc($result)){
                        $nnn = $row['account_name'];
                        $desc = $row['account_description'];
                        $acimg = $row['account_img'];
                        $igred = $row['account_redirect'];
                        echo "<div class='card' style='max-width: 420px;'>
                        <img class='card-img-top' src='../accpfp/$acimg' alt='Card image cap' style='width: 420px; max-height: 315px;'>
                        <div class='card-block'>
                      <h4 class='card-title' style='text-align: center'>@$nnn</h4>
                      <p class='card-text' style='text-align: center'>$desc</p>
                      <a href='https://instagram.com/$igred' class='btn btn-primary' style='margin-left: 43%;'>Follow</a>
                      </div>
                      </div>";
                        }

                
                   
              ?>
                            <?php
                include_once 'includes/config.inc.php';
                $sql = "SELECT * FROM accounts Where account_status='Premium' order by list_points desc LIMIT 3, 2;";
                $result = mysqli_query($db, $sql);
                
                    if($row = mysqli_fetch_assoc($result)){
                        $nnn = $row['account_name'];
                        $desc = $row['account_description'];
                        $acimg = $row['account_img'];
                        $igred = $row['account_redirect'];
                        echo "<div class='card' style='max-width: 420px;'>
                        <img class='card-img-top' src='../accpfp/$acimg' alt='Card image cap' style='width: 420px; max-height: 315px;'>
                        <div class='card-block'>
                      <h4 class='card-title' style='text-align: center'>@$nnn</h4>
                      <p class='card-text' style='text-align: center'>$desc</p>
                      <a href='https://instagram.com/$igred' class='btn btn-primary' style='margin-left: 43%;'>Follow</a>
                      </div>
                      </div>";
                        }

                
                   
              ?>
                            <?php
                include_once 'includes/config.inc.php';
                $sql = "SELECT * FROM accounts Where account_status='Premium' order by list_points desc LIMIT 4, 3;";
                $result = mysqli_query($db, $sql);
                
                    if($row = mysqli_fetch_assoc($result)){
                        $nnn = $row['account_name'];
                        $desc = $row['account_description'];
                        $acimg = $row['account_img'];
                        $igred = $row['account_redirect'];
                        echo "<div class='card' style='max-width: 420px;'>
                        <img class='card-img-top' src='../accpfp/$acimg' alt='Card image cap' style='width: 420px; max-height: 315px;'>
                        <div class='card-block'>
                      <h4 class='card-title' style='text-align: center'>@$nnn</h4>
                      <p class='card-text' style='text-align: center'>$desc</p>
                      <a href='https://instagram.com/$igred' class='btn btn-primary' style='margin-left: 43%;'>Follow</a>
                      </div>
                      </div>";
                        }

                
                   
              ?>

                          <div class="container-fluid" style="margin-top: 30px">
                                <div class="row">
                                  <div class="card-deck" style="margin: auto;">
                                  <?php
                include_once 'includes/config.inc.php';
                $sql = "SELECT * FROM accounts Where account_status='Premium' order by list_points desc LIMIT 5, 4;";
                $result = mysqli_query($db, $sql);
                
                    if($row = mysqli_fetch_assoc($result)){
                        $nnn = $row['account_name'];
                        $desc = $row['account_description'];
                        $acimg = $row['account_img'];
                        $igred = $row['account_redirect'];
                        echo "<div class='card' style='max-width: 420px;'>
                        <img class='card-img-top' src='../accpfp/$acimg' alt='Card image cap' style='width: 420px; max-height: 315px;'>
                        <div class='card-block'>
                      <h4 class='card-title' style='text-align: center'>@$nnn</h4>
                      <p class='card-text' style='text-align: center'>$desc</p>
                      <a href='https://instagram.com/$igred' class='btn btn-primary' style='margin-left: 43%;'>Follow</a>
                      </div>
                      </div>";
                        }

                
                   
              ?>
                                     <?php
                include_once 'includes/config.inc.php';
                $sql = "SELECT * FROM accounts Where account_status='Premium' order by list_points desc LIMIT 6, 5;";
                $result = mysqli_query($db, $sql);
                
                    if($row = mysqli_fetch_assoc($result)){
                        $nnn = $row['account_name'];
                        $desc = $row['account_description'];
                        $acimg = $row['account_img'];
                        $igred = $row['account_redirect'];
                        echo "<div class='card' style='max-width: 420px;'>
                        <img class='card-img-top' src='../accpfp/$acimg' alt='Card image cap' style='width: 420px; max-height: 315px;'>
                        <div class='card-block'>
                      <h4 class='card-title' style='text-align: center'>@$nnn</h4>
                      <p class='card-text' style='text-align: center'>$desc</p>
                      <a href='https://instagram.com/$igred' class='btn btn-primary' style='margin-left: 43%;'>Follow</a>
                      </div>
                      </div>";
                        }

                
                   
              ?>
                                    <?php
                include_once 'includes/config.inc.php';
                $sql = "SELECT * FROM accounts Where account_status='Premium' order by list_points desc LIMIT 7, 6;";
                $result = mysqli_query($db, $sql);
                
                    if($row = mysqli_fetch_assoc($result)){
                        $nnn = $row['account_name'];
                        $desc = $row['account_description'];
                        $acimg = $row['account_img'];
                        $igred = $row['account_redirect'];
                        echo "<div class='card' style='max-width: 420px;'>
                        <img class='card-img-top' src='../accpfp/$acimg' alt='Card image cap' style='width: 420px; max-height: 315px;'>
                        <div class='card-block'>
                      <h4 class='card-title' style='text-align: center'>@$nnn</h4>
                      <p class='card-text' style='text-align: center'>$desc</p>
                      <a href='https://instagram.com/$igred' class='btn btn-primary' style='margin-left: 43%;'>Follow</a>
                      </div>
                      </div>";
                        }

                
                   
              ?>
                                  </div>

                                  <div class="container-fluid" style="margin-top: 30px">
                                        <div class="row">
                                          <div class="card-deck" style="margin: auto;">
                                          <?php
                include_once 'includes/config.inc.php';
                $sql = "SELECT * FROM accounts Where account_status='Premium' order by list_points desc LIMIT 8, 7;";
                $result = mysqli_query($db, $sql);
                
                    if($row = mysqli_fetch_assoc($result)){
                        $nnn = $row['account_name'];
                        $desc = $row['account_description'];
                        $acimg = $row['account_img'];
                        $igred = $row['account_redirect'];
                        echo "<div class='card' style='max-width: 420px;'>
                        <img class='card-img-top' src='../accpfp/$acimg' alt='Card image cap' style='width: 420px; max-height: 315px;'>
                        <div class='card-block'>
                      <h4 class='card-title' style='text-align: center'>@$nnn</h4>
                      <p class='card-text' style='text-align: center'>$desc</p>
                      <a href='https://instagram.com/$igred' class='btn btn-primary' style='margin-left: 43%;'>Follow</a>
                      </div>
                      </div>";
                        }

                
                   
              ?>
                                           <?php
                include_once 'includes/config.inc.php';
                $sql = "SELECT * FROM accounts Where account_status='Premium' order by list_points desc LIMIT 9, 8;";
                $result = mysqli_query($db, $sql);
                
                    if($row = mysqli_fetch_assoc($result)){
                        $nnn = $row['account_name'];
                        $desc = $row['account_description'];
                        $acimg = $row['account_img'];
                        $igred = $row['account_redirect'];
                        echo "<div class='card' style='max-width: 420px;'>
                        <img class='card-img-top' src='../accpfp/$acimg' alt='Card image cap' style='width: 420px; max-height: 315px;'>
                        <div class='card-block'>
                      <h4 class='card-title' style='text-align: center'>@$nnn</h4>
                      <p class='card-text' style='text-align: center'>$desc</p>
                      <a href='https://instagram.com/$igred' class='btn btn-primary' style='margin-left: 43%;'>Follow</a>
                      </div>
                      </div>";
                        }

                
                   
              ?>
                                             <?php
                include_once 'includes/config.inc.php';
                $sql = "SELECT * FROM accounts Where account_status='Premium' order by list_points desc LIMIT 10, 9;";
                $result = mysqli_query($db, $sql);
                
                    if($row = mysqli_fetch_assoc($result)){
                        $nnn = $row['account_name'];
                        $desc = $row['account_description'];
                        $acimg = $row['account_img'];
                        $igred = $row['account_redirect'];
                        echo "<div class='card' style='max-width: 420px;'>
                        <img class='card-img-top' src='../accpfp/$acimg' alt='Card image cap' style='width: 420px; max-height: 315px;'>
                        <div class='card-block'>
                      <h4 class='card-title' style='text-align: center'>@$nnn</h4>
                      <p class='card-text' style='text-align: center'>$desc</p>
                      <a href='https://instagram.com/$igred' class='btn btn-primary' style='margin-left: 43%;'>Follow</a>
                      </div>
                      </div>";
                        }

                
                   
              ?>
                                          </div>


                                          <div class="container-fluid" style="margin-top: 30px">
                                                <div class="row">
                                                  <div class="card-deck" style="margin: auto;">
                                                  <?php
                include_once 'includes/config.inc.php';
                $sql = "SELECT * FROM accounts Where account_status='Premium' order by list_points desc LIMIT 11, 10;";
                $result = mysqli_query($db, $sql);
                
                    if($row = mysqli_fetch_assoc($result)){
                        $nnn = $row['account_name'];
                        $desc = $row['account_description'];
                        $acimg = $row['account_img'];
                        $igred = $row['account_redirect'];
                        echo "<div class='card' style='max-width: 420px;'>
                        <img class='card-img-top' src='../accpfp/$acimg' alt='Card image cap' style='width: 420px; max-height: 315px;'>
                        <div class='card-block'>
                      <h4 class='card-title' style='text-align: center'>@$nnn</h4>
                      <p class='card-text' style='text-align: center'>$desc</p>
                      <a href='https://instagram.com/$igred' class='btn btn-primary' style='margin-left: 43%;'>Follow</a>
                      </div>
                      </div>";
                        }

                
                   
              ?>
                                                     <?php
                include_once 'includes/config.inc.php';
                $sql = "SELECT * FROM accounts Where account_status='Premium' order by list_points desc LIMIT 12, 11;";
                $result = mysqli_query($db, $sql);
                
                    if($row = mysqli_fetch_assoc($result)){
                        $nnn = $row['account_name'];
                        $desc = $row['account_description'];
                        $acimg = $row['account_img'];
                        $igred = $row['account_redirect'];
                        echo "<div class='card' style='max-width: 420px;'>
                        <img class='card-img-top' src='../accpfp/$acimg' alt='Card image cap' style='width: 420px; max-height: 315px;'>
                        <div class='card-block'>
                      <h4 class='card-title' style='text-align: center'>@$nnn</h4>
                      <p class='card-text' style='text-align: center'>$desc</p>
                      <a href='https://instagram.com/$igred' class='btn btn-primary' style='margin-left: 43%;'>Follow</a>
                      </div>
                      </div>";
                        }

                
                   
              ?>
                                                    <?php
                include_once 'includes/config.inc.php';
                $sql = "SELECT * FROM accounts Where account_status='Premium' order by list_points desc LIMIT 13, 12;";
                $result = mysqli_query($db, $sql);
                
                    if($row = mysqli_fetch_assoc($result)){
                        $nnn = $row['account_name'];
                        $desc = $row['account_description'];
                        $acimg = $row['account_img'];
                        $igred = $row['account_redirect'];
                        echo "<div class='card' style='max-width: 420px;'>
                        <img class='card-img-top' src='../accpfp/$acimg' alt='Card image cap' style='width: 420px; max-height: 315px;'>
                        <div class='card-block'>
                      <h4 class='card-title' style='text-align: center'>@$nnn</h4>
                      <p class='card-text' style='text-align: center'>$desc</p>
                      <a href='https://instagram.com/$igred' class='btn btn-primary' style='margin-left: 43%;'>Follow</a>
                      </div>
                      </div>";
                        }

                
                   
              ?>
                                                  </div>
              </div>

           
    </section>
                    
    <!-- ***** Catagory Area End ***** -->



    <!-- ****** Footer Area Start ****** -->
    <footer class="if-footer-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-md-flex align-items-center justify-content-between">
                    <div class="footer-text">
                        <p>
                       Copyright &copy; 2018 All rights reserved
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ****** Footer Area End ****** -->
    <style>

        @media only screen and (min-width: 320px){
            .body{
                width: 100%;
                overflow-x: hidden;

            }
            .header_area{
                width: 100%;

            }
            .if-welcome-area{
                width: 100%;

            }
            .hero-content{
                width: 100%;
                overflow-x: hidden; 
            } 
            .hero-content h2{
                font-size: 37px;
                text-align: center;
            }  
            .if-catagory-area{
                width: 100%;


            }
            .if-footer-are {
                width: 100%;
                    overflow-x: hidden; 


            }
        }
        }
        </style>
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