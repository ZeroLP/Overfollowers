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
      <title>Upgrade Page</title>
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
                <div class="container" style="background-color: #341a79; padding: 50px; border-radius: 15px;">

<div class="row align-items-center justify-content-center">
<div class="card" style="width: 18rem; display: inline-block;
    margin: 5px;">
  <div class="card-body">
    <h5 class="card-title pricing-card-title" style="text-align: center">Premium</h5>
    <h6 style="text-align: center">$25 / 30 days</h6>
    <li>- Larger Account Icon than Normal accounts</li>
              <li>- 3 List Points instead of 1</li>
              <li>- You can sleep knowing you are awesome!</li>
              <div style="margin-top: 10px">
              <?php
 if(isset($_SESSION['u_id'])){
   echo "<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
    <input type='hidden' name='cmd' value='_s-xclick'>
    <input type='hidden' name='hosted_button_id' value='6MJQZL6UMU83U'>
    <input type='image' src='https://www.paypalobjects.com/en_AU/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal – The safer, easier way to pay online!'>
    <img alt='' border='0' src='https://www.paypalobjects.com/en_AU/i/scr/pixel.gif' width='1' height='1'>
    </form>";
}
else{
  echo "<p>Create an account or sign in to upgrade your account!</p>";
}
              ?>
              

</div>  
</div>
</div>

<div class="card" style="width: 18rem; display: inline-block;
    margin: 5px;">
  <div class="card-body">
    <h5 class="card-title pricing-card-title" style="text-align: center">Ultimate Premium</h5>
    <h6 style="text-align: center">$45 / 30 days</h6>
    <li>- Standouting Purple Highlight</li>
              <li>- First slot on the website</li>
              <li>- Larger Account Icon than Normal accounts</li>
              <li>- No need to list! Its there for you!</li>
              <li>- The Feeling You Get When Winning!</li>
              <li>- You can sleep knowing you are awesome!</li>
              <div style="margin-top: 10px">
              <?php
 if(isset($_SESSION['u_id'])){
   echo "<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
    <input type='hidden' name='cmd' value='_s-xclick'>
    <input type='hidden' name='hosted_button_id' value='YS39GPN9576QY'>
    <input type='image' src='https://www.paypalobjects.com/en_AU/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal – The safer, easier way to pay online!'>
    <img alt='' border='0' src='https://www.paypalobjects.com/en_AU/i/scr/pixel.gif' width='1' height='1'>
    </form>";
}
else{
  echo "<p>Create an account or sign in to upgrade your account!</p>";
}
              ?>
                   </div>  
</div>
</div>
                        </div>


</div>



  
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