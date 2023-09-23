<?php include("admin_process.php");?>
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
	<link rel="stylesheet" type="text/css" href="admin_log.css">
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
     	    <li><a class ="" href="homepage.php">Home</a></li>
            <li><a href="aboutus.html">About Us</a></li>
		    <li><a href="Services.html">Services</a></li>
     	    <li><a href="covid.html">Covid-19 </a></li>
            <li><a class ="active" href="account.html"><i class="far fa-user-circle"></i></a></li>
     </ul>	
	</nav>
	</div>
	</div>
	<form action="admin_login.php" method="POST">
	<div class="mainbody">
		<div class="container">
			<p class="login">Admin Login </p>
			<div class="centerbox">
				<div class="cb">
				<p class="boxinfo">User Name</p>
				<input type="text" name ="username1" class ="padding" placeholder="Enter Your UserName">
				<br>
				<br>
                <p class="boxinfo">Password</p>
                <input type="password" name ="password" class ="padding2"placeholder="Enter Your Password"><br>
                <br> 
                 <button type = "submit" class="button2" name = "adlogin_user">Login</a></button>
                </div>
			</div>
			
		</div>
	</div>
</form>	

</body>
</html>