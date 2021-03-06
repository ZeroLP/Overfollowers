<?php
session_start();
if(!isset($_SESSION['u_id'])){
    header("Location: ../login.php");
    exit();
}
else{

}
?> 
<html>
   
   <head>
      <title>Addaccount Page</title>
      <?php
    include 'header.php';
   ?>
   </head>
   
   <body bgcolor = "#FFFFFF">
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
                            <div class="if-signin-btn">
                                <a href="../dashboard.php">Dashboard</a>
                            </div>
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

    <div class="container" style="background-color: #341a79; padding: 50px; border-radius: 15px">
    <h2 class="form-signup-heading" style="color: white;">Add Account</h2>

    <form class="form-addaccount" id="addaccform" action="includes/addacc.inc.php" method="POST">

        <label for="inputfn" class="sr-only">Account Name</label>
        <input type="text" name="accname" class="form-control" placeholder="Account Name" required autofocus>
        <div style="margin-bottom: 10px">
        </div>
 <label for="inputln" class="sr-only">Account Description</label>
        <textarea name="desc" form="addaccform" placeholder="Account Description" required style="padding: 5px; border-radius: 5px"></textarea>
        <div style="margin-bottom: 10px">
        </div>
        <label for="inputEmail" class="sr-only">Instagram Username</label>
        <input type="text" name="igusername" class="form-control" placeholder="Instagram Username" required autofocus>
    
        <div style="margin-bottom: 10px">
        </div>
   

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Add Account</button>
      </form>
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

   </body>
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
</html>