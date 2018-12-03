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

    <!-- ***** Catagory Area Start ***** -->

    <section class="if-catagory-area">

        <div class="container-fluid" style="margin-top: 100px">
                <h1 style="text-align: center;">Free Listings</h1>
                <div class="row">
                  <div class="card-deck" style="margin: auto;">

   <?php
                include_once 'includes/config.inc.php';
                $sql = "SELECT * FROM accounts Where account_status='Free' order by list_points desc LIMIT 1;";
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
                $sql = "SELECT * FROM accounts Where account_status='Free' order by list_points desc LIMIT 1, 1;";
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
                $sql = "SELECT * FROM accounts Where account_status='Free' order by list_points desc LIMIT 2, 1;";
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
                $sql = "SELECT * FROM accounts Where account_status='Free' order by list_points desc LIMIT 3, 2;";
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
                $sql = "SELECT * FROM accounts Where account_status='Free' order by list_points desc LIMIT 4, 3;";
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
                $sql = "SELECT * FROM accounts Where account_status='Free' order by list_points desc LIMIT 5, 4;";
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
                $sql = "SELECT * FROM accounts Where account_status='Free' order by list_points desc LIMIT 6, 5;";
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
                $sql = "SELECT * FROM accounts Where account_status='Free' order by list_points desc LIMIT 7, 6;";
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
                $sql = "SELECT * FROM accounts Where account_status='Free' order by list_points desc LIMIT 8, 7;";
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
                $sql = "SELECT * FROM accounts Where account_status='Free' order by list_points desc LIMIT 9, 8;";
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
                $sql = "SELECT * FROM accounts Where account_status='Free' order by list_points desc LIMIT 10, 9;";
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
                $sql = "SELECT * FROM accounts Where account_status='Free' order by list_points desc LIMIT 11, 10;";
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
                $sql = "SELECT * FROM accounts Where account_status='Free' order by list_points desc LIMIT 12, 11;";
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
                $sql = "SELECT * FROM accounts Where account_status='Free' order by list_points desc LIMIT 13, 12;";
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
                $sql = "SELECT * FROM accounts Where account_status='Free' order by list_points desc LIMIT 14, 13;";
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
                $sql = "SELECT * FROM accounts Where account_status='Free' order by list_points desc LIMIT 15, 14;";
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
                $sql = "SELECT * FROM accounts Where account_status='Free' order by list_points desc LIMIT 16, 15;";
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
                $sql = "SELECT * FROM accounts Where account_status='Free' order by list_points desc LIMIT 17, 16;";
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
                $sql = "SELECT * FROM accounts Where account_status='Free' order by list_points desc LIMIT 18, 17;";
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
                $sql = "SELECT * FROM accounts Where account_status='Free' order by list_points desc LIMIT 19, 18;";
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
                $sql = "SELECT * FROM accounts Where account_status='Free' order by list_points desc LIMIT 20, 19;";
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
                $sql = "SELECT * FROM accounts Where account_status='Free' order by list_points desc LIMIT 21, 20;";
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
                $sql = "SELECT * FROM accounts Where account_status='Free' order by list_points desc LIMIT 22, 21;";
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
                $sql = "SELECT * FROM accounts Where account_status='Free' order by list_points desc LIMIT 23, 22;";
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
                $sql = "SELECT * FROM accounts Where account_status='Free' order by list_points desc LIMIT 24, 23;";
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
                $sql = "SELECT * FROM accounts Where account_status='Free' order by list_points desc LIMIT 25, 24;";
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
                $sql = "SELECT * FROM accounts Where account_status='Free' order by list_points desc LIMIT 26, 25;";
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
                $sql = "SELECT * FROM accounts Where account_status='Free' order by list_points desc LIMIT 26, 26;";
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
                $sql = "SELECT * FROM accounts Where account_status='Free' order by list_points desc LIMIT 28, 27;";
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
                $sql = "SELECT * FROM accounts Where account_status='Free' order by list_points desc LIMIT 29, 28;";
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
                $sql = "SELECT * FROM accounts Where account_status='Free' order by list_points desc LIMIT 30, 29;";
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