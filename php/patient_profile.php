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
	<link rel="stylesheet" type="text/css" href="patientui1.css">
	<script src="https://kit.fontawesome.com/398de335e7.js" crossorigin="anonymous"></script>
</head>
<?php

$MySQLi_connection= new MySQLi('localhost','root','','cse299_project');

if(MySQLi_connect_error())
{
    die('Connect Error('.MySQLi_connect_errno().')'.MySQLi_connect_error());
}
session_start();
$uname = $_SESSION['id'];
$query = "SELECT * FROM patient_registration where Username='$uname'";
$result = mysqli_query($MySQLi_connection, $query);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

?>
<body>
	<div class="Header">
		<div class="logo">
			<img class="logopic" 
			src ="logo.png" alt="My sample image" height="100">
			
		</div>
		<div class ="navbar">
			<nav>
     <ul class="navlinks">
     	<li><a class="" href="homepage.php">Home</a></li>
     	<li><a href="aboutus.html">About Us</a></li>
		<li><a href="Service.html">Services</a></li>
     	<li><a href="covid.html">Covid-19</a></li>
     	<li><a href="account.html"><i class="far fa-user-circle"></i></a></li>
     </ul>	
	</nav>
	</div>
	</div>

	        <div class="profilename">
	    		<p class="Profile"> <?php echo $row['Name']; ?>'s Profile</p>
	        </div>
			
	<form action="doctorlist.php" method="POST">
	<div class="mainbody">
		<div class="box">
		    <p class="account">Welcome to your profile</p>   
		 </div>
		  
	    <div class="Container">
	    	<div class="Wrapeer1">
	    	<div>	
	    	<p class="Type">Name</p>
	    	<input type="text" name ="fname" value="<?php echo $row['Name']; ?>" required>
	    	<p class="Type">Email</p>
            <input type="email" name ="email" value="<?php echo $row['Email']; ?>" required>	
            </div>

            <div>	
	    	<p class="Type">Contact no.</p>
	    	<input type="text" name ="number" value="<?php echo $row['ContactNo']; ?>" required>	
	    	<p class="Type">Date of Birth</p>
	    	<input type ="text"  name="dateOfBirth" value="<?php echo $row['Date_of_Birth']; ?>" required>
            </div>
            <div>
            <p class="Type">Gender</p>
            <input type ="text"  name="gender" placeholder="" value="<?php echo $row['Gender']; ?>" required>	
            </div>
            
            </div>
            <div class="Wrapeer3">
	        <div class="Address">
            <p class="Type">Address</p>
            <input type="text" name ="address" placeholder="" value="<?php echo $row['Address']; ?>" required>
            </div>
<br>
<br>
            <div class="Wrapeer3">
	        <div>
			 	 
	    		
	    	<a class="button" name = "update" href = "patient_profile_update.php">Update Profile</a>
	    	<br>
	    	<br>
	    	</div>
	    	<br>
	    	<br>
	    	</div>
	      
	        <div>	
	    	<button class="button"><a href = "http://127.0.0.1:5000/">Cancer Predictor</a></button>
	    	<br>
	    	<br>
	    	</div>
	        
	    	<div>	
	    	<button class="button" name = ""><a href = "p_appointment_list.php">Appoinmnet List</a></button>
			<br>
            <br>
	    	</div>
	    	<div>
			
				<input type = "hidden" name = "puname" value = "<?php echo $row['Username'];?>">	
				<input type = "submit" name = "dlist" class = "button" value = "Doctor List">
			
			<br>
            <br>
	    	</div>
	    
	    	<div>	
	    	<button class="button" name = "logout"><a href = "patient_login.php">Logout</a></button>
			<br>
            <br>
	    	</div>
	        </div>
	       
	  </form>   
	  
</body>

</html>
<?php

if(isset($_POST['update'])){
        $fullname = $_POST['fname'];
        $dob = $_POST['dateOfBirth'];
        $gender = $_POST['gender'];
        $mnum = $_POST['number'];
        $email = $_POST['email'];
        $address = $_POST['address'];

        $query = "UPDATE `patient_registration` SET `Name` = '$fullname', `ContactNo` = '$mnum', `Email` = '$email', `Date_of_Birth` ='$dob', `Gender` = '$gender', `Address` = '$address' WHERE `Username` = '$uname'";
                      $result = mysqli_query($MySQLi_connection, $query);
                      
            ?> 
        <script type="text/javascript">
            alert("Profile Update Successful.");
            window.location = "patient_profile.php";
        </script>
        <?php
                 }

	 

    ?>