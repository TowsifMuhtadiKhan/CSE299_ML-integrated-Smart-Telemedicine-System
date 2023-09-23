<?php include('patient_server.php');?>
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
	<link rel="stylesheet" type="text/css" href="psignin.css">
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
            <li><a class ="active" href="account.html"><i class="far fa-user-circle"></i></a></li>
     </ul>	
	</nav>
	</div>
	</div>

	<form action="patient_signup.php" method="POST">
	<div class="mainbody">
		<div class="box">
		    <p class="account">Creat your Account as a Patient</p>
		    <p class="B">Already have an account ? <a href  ="patient_login.php">  Login</a></p>
		 </div>   
	    <div class="Container">
	    	<div class="Wrapeer1">
	    	<div>	
	    	<p class="Type">Name</p>
	    	<input type="text" name ="fname"  required placeholder="Enter Your Name">
	    	<p class="Type">Email</p>
            <input type="email" name ="email"  required placeholder="Enter Your Email Adress">	
            </div>

            <div>	
	    	<p class="Type">Contact no.</p>
	    	<input type="text" name ="cnumber" required placeholder="Enter Your Contact no.">	
	    	<p class="Type">Date of Birth</p>
	    	<input type ="date"  name="dateOfBirth" required>
            </div>
            <div>
            <p class="Type">Gender</p>
            <select class ="select" name="gender" required>
            <option disabled selected>Choose Gender</option>
      		<option value="male">Male</option>
            <option value="female">Female</option>
      	    </select>	
            </div>
            <div class="Address">
            <p class="Type">Address</p>
            <input type="text" name ="address"placeholder="Enter Your Address">
            </div>
            </div>
            

         <div class="Wrapeer2">
	    	<div>	
	    	<p class="Type">UserName</p>
	    	<input type="text" name ="username" placeholder="Enter Your User Name">
	    	</div>
	    	<div>	
	    	<p class="Type">Password</p>
	    	<input type="password"  name ="password" placeholder="Enter Your Password">
            </div> 
	    </div>

            <p class="policy">By clicking "SIGN IN" I agree to Privacy Policy</p>
            <div class="Wrapeer3">
	        <div>	
	    	<button type = "submit" class="button" name = "reg_user">SIGN IN</button>
	    	</div>
	        </div>
	       
	  </form>     
	

</body>
</html>