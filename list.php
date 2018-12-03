<?php
   session_start();
   if(isset($_SESSION['u_id'])){
    $name = $_SESSION['u_first'];
    $lname = $_SESSION['u_last'];
}
else{
  
}
?>
<html>
   
   <head>
      <title>List Page</title>
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
                <div class="container" style="background-color: #341a79; padding: 50px; border-radius: 15px; width: 400px">

<h1 style="color: white; text-align: center">Listing</h1>
<form action="includes/list.inc.php" method="POST">
    <button type="submit" name="submit" style="margin-left: 40%"class="btn btn-primary">List</button>
</form>
              
<?php
$ajdfg = microtime();
$datea = strtotime ( '+24 hours' , time()) ;
$remaining = 1536320025 - time();
$days_remaining = floor($remaining / 86400); // 24 - now = ans / 86400 sec
$hours_remaining = floor(($remaining % 86400) / 3600); // 24 - now = (ans / 86400) / 3600 sec
$minutes_remaining = floor(($remaining % 3600) / 60);
$seconds_remaining = floor(($remaining % 60));
echo "<p>$hours_remaining $minutes_remaining $seconds_remaining</p>";

?>
</div>  
</div>
</div>


  
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