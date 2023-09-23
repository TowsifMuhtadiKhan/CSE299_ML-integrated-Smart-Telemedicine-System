<?php include("patient_server.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>VHSBD</title>
	<link href="https://fonts.googleapis.com/css2?family=Cabin&family=Montserrat&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet"
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500&family=Roboto:wght@300&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Roboto:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="plogin.css">
	<script src="https://kit.fontawesome.com/398de335e7.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="Header">
		<div class="logo">
			<img class="logopic" 
			src ="logo.png" alt="My sample image" height="100">
			
		</div>
		<div class ="navbar">
			<nav>
     <ul class="navlinks">
	 <li><a  href="homepage.php">Home</a></li>
            <li><a href="aboutus.html">About Us</a></li>
		    <li><a href="Services.html">Services</a></li>
     	    <li><a href="covid.html">Covid-19 </a></li>
            <li><a  class ="active" href="account.html"><i class="far fa-user-circle"></i></a></li>
     </ul>	
	</nav>
	</div>
	</div>
	<form action="patient_login.php" method="POST">
	<div class="mainbody">
		<div class="container">
			<p class="login">Login to Your Account as a Patient </p>
			<div class="centerbox">
				<div class="cb">
				<p class="boxinfo">User name</p>
				<input type="text"  name ="username2" class ="padding"placeholder="Enter Your UserName">
				<br>
				<br>
                <p class="boxinfo">Password</p>
                <input type="password" name ="password" class ="padding2"placeholder="Enter Your Password"><br>
                 
                 <button type = "submit" class="button2" name = "login_user">Login</button>
                </div>
			</div>
			<p class="login2">Don't have an Account ? </p>
			<a href="#">
			<button  class="button" ><a href="patient_signup.php">Create Account</a></button>
		    </a> 
		</div>
	</div>
</form>	

</body>
</html>