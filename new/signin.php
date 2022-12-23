<!DOCTYPE html>
<html lang="en">
<head>
<?php include('metatag.php');  ?>


</head>

<body>
 
    <div class="preloader">
        <div class="status"></div>
    </div>
 
 
    <header>
    <?php include('navbar.php');  ?>
		
	
        
    </header>
	
	 <section id="contact" class="section-wrapper contact-section" data-stellar-background-ratio="0.5">
     <img class="busimg" src="images/bus.jpg">
     <form action="login.php" method="post" autocomplete="off">
		<div class="center">
     	<h2>LogIn</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name" class="textfield"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password" class="textfield"><br>

     	<button type="submit" class="btn">Login</button>
		</div>
        <div > <a style="padding-left: 60rem;" href="forgot1.php">forgot Password</a> </div>
     </form>
     <div><br><br><br></div>
    </section>
	
	
    <footer>

        <div class="container">
            <div class="row">
                <div class="footer-containertent">
					
<p>Copyright © 2021-2022.  <a href="#" target="_blank">JSS BUS MANGEMENT</a> by BCA Students Amit and Abhishek</p>
<br/><br/>
                </div>
            </div>
        </div>
    </footer>
  

    <?php include('footer.php');  ?>

</body>
</html>
