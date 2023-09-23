
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
	<link rel="stylesheet" type="text/css" href="app_list.css">
	<script src="https://kit.fontawesome.com/398de335e7.js" crossorigin="anonymous"></script>
</head>
<?php

session_start();
$MySQLi_connection= new MySQLi('localhost','root','','cse299_project');

if(MySQLi_connect_error())
{
    die('Connect Error('.MySQLi_connect_errno().')'.MySQLi_connect_error());
}

$uname = $_SESSION['id'];

$query = "SELECT * FROM `patient_registration` WHERE `Username` = '$uname'";
$result = mysqli_query($MySQLi_connection, $query); 
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

$fullname1 = $row['Name'];

$query1 = "SELECT * FROM `appointment_list` WHERE `Full_Name` = '$fullname1'";
$result1 = mysqli_query($MySQLi_connection, $query1);



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
	    		<p class="Profile"> My Appointment List</p>
	        </div>
			<br>
			<br>
			
    <div class= "">
			<table>
			<tr>
				<th>Doctor Name</th>
				<th>Specialization</th>
				<th>Appointment Day</th>
				<th>Appointment Time</th>
				<th>Meeting Link</th>
			</tr>
			<?php
			while($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)){ 

			?> 
						<tr>
							<td><?php echo $row1['Doctor_Name']; ?></td>
							<td><?php echo $row1['Specialization']; ?></td>
							<td><?php echo $row1['Preferable_Day']; ?></td>
						
							<td><?php echo $row1['Preferable_Time']; ?></td>

							<td><?php 
							
							$fullName2 = $row1['Doctor_Name'];
							$query2 = "SELECT * FROM `doctor_registration` WHERE `FullName` = '$fullName2'";
							$result2 = mysqli_query($MySQLi_connection, $query2);
							$row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);

							echo $row2['Meet_link']; ?></td>
							


						</tr>
						

			<?php
				}
				
			?> 
			</table>
	</div>
	
</body>



</html>
