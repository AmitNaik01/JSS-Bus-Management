<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Businnes, Portfolio, Corporate"> 
	<meta name="Author" content="WebThemez"> 
    <title>Student Gandance</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css" />
	<link rel="stylesheet" href="elegant_font/style.css" />
    <!--[if lte IE 7]><script src="elegant_font/lte-ie7.js"></script><![endif]-->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/slider-pro.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <link rel="stylesheet" href="css/animate.css">
	    <link rel="stylesheet" href="elegant_font/style.css"> 
    <link rel="stylesheet" href="css/style.css"> 

    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <script type="text/javascript" src="js/selectivizr.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="status"></div>
    </div>
 
    <!-- Header End -->
    <header>
        <!-- Navigation Menu start-->
		


        
    </header>
    <!-- Header End -->
	<?php
include('../db_connect.php');
$uname=$_POST['username'];
 $sql="select * from login where binary(username)='$uname'";
//echo $sql;
$res=$conn->query($sql);
if($row=mysqli_fetch_array($res))
{
    $hintqtn=$row["security_questions"];
	$hintans=$row["security_answers"];
	$pwd=$row["password"];
	$username=$row['username'];
?>

 




    
    <!-- Portfolio Section End -->








  
    <!-- Clients Section -->
    
    <!-- Client Section End -->  
	
	 <section id="contact" class="section-wrapper contact-section" data-stellar-background-ratio="0.5">
    <div class="parallax-overlay"></div>
        <div class="container">
            <div class="row">

                <!-- Section Header -->
              <div class="col-md-12 col-sm-12 col-xs-12 section-header wow fadeInDown">
                   <!-- <h2><span class="highlight-text">Forgot Password</span></h2> -->
					<h2><span class="highlight-text">Security Questions	<br> <b><?php echo $row['security_questions']; ?></b></span></h2>
                   
                    <!--<p class="col-md-8 col-sm-10 col-xs-12 col-md-offset-2 col-sm-offset-1">We love feedback. Fill out the form below and we'll get back to you as soon as possible. in minus distinctio dolores ipsam.</p> -->
                </div> 
                <!-- Section Header End -->

                <div class="contact-details">
 

                    <!-- Contact Form -->
                    <div class="contact-form wow bounceInRight"> 
                
       	<!--NOTE: Update your email Id in "contact_me.php" file in order to receive emails from your contact form-->
		<form name="sentMessage" id="contactForm" method="post"	 action="forgot_pass_change.php"  novalidate>  
		 <div class="col-md-6">
		<input type="text" class="form-control" 
		placeholder="Paease enter your security answers" id="name" required name="security_ans" data-validation-required-message="Please enter your Username" />
		<input name="hintans" type="hidden" id="hintans" value="<?php echo $hintans; ?>">
		<input type="hidden" name="username" value="<?php echo $username; ?>" >
		<p class="help-block"></p>
		</div> 	
		 <div class="col-md-6">
		<!--<input type="password" class="form-control" name="password" placeholder="Password" id="email" required="" data-validation-required-message="Please enter your Password" /> -->
		<div class="col-md-4 col-md-offset-5"><br><div id="success"> </div><button type="submit" class="btn btn-primary">Login</button></div>
		</div> 	
 

		</form>
      </div>
	  
 
            </div>
			
        </div>
		
    </section>
	
	
	
	
    <!-- Contact Section End -->
<!--    <section class="footer-container">
        <div class="container">
            <div class="row footer-containertent">
                <div class="col-md-4">
                    <img src="images/logo.png" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et porro quos iste ratione doloribus asperiores, error omnis delectus rerum sapiente. Et, aliquam modi beatae quae in perferendis ab est fugiat!</p>
                </div>
                <div class="col-md-4">
                    <h4>News & Updates</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, nam corporis quas, saepe minima error aperiam dolorum aliquam, quis deserunt eos eius quisquam odio itaque.</p>
                </div>
                <div class="col-md-4 contac-us">
                    <h4>Contact Us</h4>
                    <p>Lorem ipsum dolor sit amet adipisicing elit.</p>
					<ul>
                            <li><i class="fa fa-home"></i>123 New Venu Street</li>
                            <li><i class="fa fa-phone"></i>001 123 12345 99</li>
                            <li><i class="fa fa-envelope-o"></i>support@website.com</li>
                        </ul> 
                </div>
            </div>
        </div>
    </section> -->


    <footer>

        <div class="container">
            <div class="row">
                <div class="footer-containertent">

                    <!--<ul class="footer-social-info">
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </li>
                    </ul> -->
					<br/><br/>
<p>Copyright � 2019-2020.  <a href="#" target="_blank">Free Bootstrap Template</a> by WebThemez.com, All rights reserved</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/modernizr.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.easypiechart.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.sliderPro.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
 <script src="contact/jqBootstrapValidation.js"></script>
 <script src="contact/contact_me.js"></script>
    <script src="js/custom.js"></script>
<?php	
	
}
else
{
?>
<script type="text/javascript">
alert("Wrong Username <?php echo $sql; ?>");
document.location="index.html";
//history.back();
</script>
<?php
}
?>
</body>
</html>
