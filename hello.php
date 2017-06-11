<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta HTTP-EQUIV="Pragma" CONTENT="no-cache"> 
	<meta HTTP-EQUIV="Expires" CONTENT="-1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="library/font-awesome-4.3.0/css/font-awesome.min.css">

  <!-- [ PLUGIN STYLESHEET ]
        =========================================================================================================================-->
  <!-- <link rel="shortcut icon" type="image/x-icon" href="images/icon.png"> -->
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
        <link rel ="stylesheet" type="text/css" href="library/vegas/vegas.min.css">
  <!-- [ Boot STYLESHEET ]
        =========================================================================================================================-->
        
        <!-- [ DEFAULT STYLESHEET ] 
        =========================================================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
  

<style>

 body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color: #f4511e;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }

  .container
  {
    max-width: 970px;
  }
  .container-fluid {
      padding: 40px 20px; 
	  padding-bottom:10px;
  }
  
  .container-fluid1 {
      padding: 40px 20px;
      background-color: white;
      
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  

  .carousel-indicators{
    position: absolute;
     
  }

  .carousel-indicators li {
      background-color: #000;

  }
  
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .carousel-caption{
        padding-bottom: 60px;

  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item
  {
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #000000;
      z-index: 1;
      border: 0;
      font-size: 10px!important;
      line-height: 0!important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;

  }
  

  .navbar li a, .navbar .navbar-brand {

      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #000000;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;

  }
  slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 20px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }


</style>

</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top" class="">
  <div class="container-fluid">
  <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">LIVE TRAFFIC</a>
    </div>
    
  <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#HOME" class="page-scroll">HOME</a></li>
		<?php
		//	if(!isset($_SESSION['fav']) && !isset($_SESSION['fav2']))
			if(!isset($_SESSION['fav']))
			{
				
			?>
			<li><a href="welcome.php" class="page-scroll">SIGNIN</a></li>
		<?php
		
		}
		else if(!isset($_SESSION['fav2']) && isset($_SESSION['fav']))
			
		{
		$_SESSION['fav1']='jeet';	
		
		?>
		<li><a href="middle.php" class="page-scroll">FIND YOUR ROUTE</a></li>
		
		
		<?php
		
		}
		/* else if(isset($_SESSION['fav2']) && isset($_SESSION['fav']))
		{
				
				session_destroy();
			
		} */
		?>
		
     <!--   <li><a href="#tour" class="page-scroll">SIGNUP</a></li>-->
        <li><a href="#contact" class="page-scroll">CONTACT</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Merchandise</a></li>
            <li><a href="#">Extras</a></li>
            <li><a href="#">Media</a></li> 
          </ul>
        </li>
		
			
		<?php
	
		
	 if(!isset($_SESSION['fav2']) && isset($_SESSION['fav']))
		{?>
		<li><a href="signout.php" class="page-scroll">SIGN OUT</a></li>
		
		
		<?php
	
				
		}
		else
		{
			
			
			unset($_SESSION['fav']);
			session_destroy();
			
		}
		?>
        <!-- <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>-->
		</ul>
    </div>
 
      
    
    <!-- <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage" class="page-scroll">HOME</a></li>
        <li><a href="#login" class="page-scroll">LOGIN</a></li>
        <li><a href="#tour" class="page-scroll">SIGNUP</a></li>
        <li><a href="#contact" class="page-scroll">CONTACT</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Merchandise</a></li>
            <li><a href="#">Extras</a></li>
            <li><a href="#">Media</a></li> 
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
   --></div>
</nav>
<section id="HOME">
 <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000">
      <!-- Indicators -->
      
      <div class="carousel-inner" role="listbox">

          <ol class="carousel-indicators" >
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

    
        <div class="item active">
         
          <img class="first-slide" src="images1/2nd.jpg" alt="First slide" style="width: 1536px;height: 760px;">
          <div class="container">


            <div class="carousel-caption">
            <h1></h1>
              <h1>Mumbai</h1>

              
            
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="images1/3rd.jpg" alt="Second slide" style="width: 1536px;height: 760px;">
          <div class="container">
            <div class="carousel-caption">
              <h1>Chennai</h1>
              
             </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="abad.jpg" alt="Third slide" style="width: 1536px; height:760px;">
          <div class="container">
            <div class="carousel-caption">
              <h1>Ahmedabad.</h1>
             
             
            </div>
          </div>
        </div>
      </div>

      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    </section>
    <!-- /.carousel -->
    <section id="login">
    
    <div id="about" class="container-fluid1">
            <div class="row">
                <div class="col-sm-8">
                  <h2>About Company Page</h2><br>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <br><button class="btn btn-default btn-lg">Get in Touch</button> 
                </div>
                <div class="col-sm-4">
                <span class="glyphicon glyphicon-signal logo"></span>
                </div>
          </div>
    </div>
      </section>


<section class="contactus" id="contact" data-scroll-reveal="wait 0.25s, then enter bottom and move 80px over 1s" data-scroll-reveal-id="3">
     <div class="container">
         <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="testimonial-area-heading">
                        <h2 class="grey">CONTACT US</h2>
                    </div>
                </div>
            </div>
         <div class="gap"></div>
     <div class="row">
                    <!-- /contact info -->
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <!-- contact form -->
                      <form id="contact-form" method="POST" action="php/sendmail.php">
                        <div class="row form-group">
                          <div class="col-xs-6">
                            <input type="text" name="name" placeholder="name" id="contact-name" class="form-control">
                          </div>
                          <div class="col-xs-6">
                            <input type="email" name="email1" placeholder="e-mail" id="contact-email" class="form-control ">
                          </div>
                        </div>
                        <div class="row form-group">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <textarea name="message" rows="4" placeholder="message" id="contact-message" class="form-control "></textarea>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-style blue">Submit</button>
                       <span class="form-message" style="display: none;"></span>
                      </form>
                      <!-- /contact form -->
                    </div>
                  </div>
     </div>
          
 </section>
 
<footer class="footer">
  
          <div class="container">
            <div class="footer-info col-md-12 text-center">
              <ul>
                <li><a href="#">Manchester,ny 14608</a></li>
                <li><a href="#">+580-698-5024</a></li>
                <li><a href="#">yourplugins@gmail.com</a></li>
              </ul>
            </div>
            </div>
          
     
     
 </footer>
 
 
 


 <script src="library/modernizr.custom.97074.js"></script>
  <script src="library/jquery-1.11.3.min.js"></script>
        <script src="library/bootstrap/js/bootstrap.js"></script>
  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script src="library/vegas/vegas.min.js"></script>
  <!-- [ PLUGIN SCRIPT ] -->
         
  <script src="js/plugins.js"></script>
        <script src="js/fappear.js"></script>
       <script src="js/jquery.countTo.js"></script>
   <script src="js/scrollreveal.js"></script>
         <!-- [ COMMON SCRIPT ] -->
  <script src="js/common.js"></script>
   
</body>
</html>