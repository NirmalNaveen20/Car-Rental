<?php
$host="localhost";
$user="root";
$password="";
$db="demo";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['username'])){
	$uname=$_POST['username'];
	$password=$_POST['password'];
	
	$sql="select * from loginform where user='".$uname."' AND pass='".$password."' limit 1";
	
	$result=mysql_query($sql);
	
	if(mysql_num_rows($result)==1){
		echo"You have successfully logged in";
	}
	else{
		echo"You have entered incorrect password";
	
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	
	<!-- Link To CSS -->
    <link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="./css/logincss.css">

    <!-- Google support custom css file link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
	<!-- Header start -->
    <header>
        <a href="index.php" class="logo"><img src="./img/bnlogo.png" alt="logo"></a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar">
            <li><a href="index.php">Home</a></li>
            <li><a href="Vehicles.html">Vehicles</a></li>
            <li><a href="services.html">Services</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contactus.html">Contact Us</a></li>
            <li><a href="login.php">Manage Booking</a></li>
        </ul>
        <div class="header-btn">
            <a href="Registration.html" class="sign-up">Sign Up</a>
            <a href="login.php" class="sign-in">Sign In</a>
        </div>
    </header>

    <!-- Header end -->

	<div class="about-container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="center">
      <h1>Login</h1>
      <form method="post">
        <div class="txt_field">
          <input type="text" name="username" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login" name="username">
        <div class="signup_link">
          Not a member? <a href="Registration.html">Signup</a>
        </div>
      </form>
    </div>
		</div>
	</div>
	

	<!-- Footer -->
<footer class="footer">
  	 <div class="footer-container">
  	 	<div class="row">
           <div class="footer-col">
  	 			<h4>Our Branches</h4>
  	 			<ul>
  	 				<li><a href="#"><i class="fas fa-map"></i> Glasgow</a></li>
  	 				<li><a href="#"><i class="fas fa-map"></i> Manchester</a></li>
                    <li><a href="#"><i class="fas fa-map"></i> Nottingham</a></li>
                    <li><a href="#"><i class="fas fa-map"></i> Sheffield</a></li>		
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>get help</h4>
  	 			<ul>
  	 				<li><a href="faq.html">FAQ</a></li>
  	 				<li><a href="contactus.html">Contact Support</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Company Info</h4>
  	 			<ul>
  	 				<li><a href="about.html">About Us</a></li>
                    <li><a href="services.html">Services</a></li>
  	 				<li><a href="terms.html">Terms & Conditions</a></li>
  	 				<li><a href="privacy.html">Privacy Policy</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Follow Us</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
       
        <center>
        <h1 class="credits">
        <hr/>
            Created by<a href="https://www.sliit.lk"> <span>SLIIT MLB 1.1.10</span></a> all rights reserved!
        </h1>
    </center>
</footer>
</body>
</html>


