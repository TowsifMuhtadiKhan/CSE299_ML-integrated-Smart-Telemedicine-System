
<!DOCTYPE html>
<html>
<head>
	<title>VHSBD</title>
	<link href="https://fonts.googleapis.com/css2?family=Cabin&family=Montserrat&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500&family=Roboto:wght@300&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Roboto:wght@300&display=swap" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="admin_ui.css">
	
	<script src="https://kit.fontawesome.com/398de335e7.js" crossorigin="anonymous"></script>
</head>

<?php
$MySQLi_connection= new MySQLi('localhost','root','','cse299_project');

if(MySQLi_connect_error())
{
    die('Connect Error('.MySQLi_connect_errno().')'.MySQLi_connect_error());
}


$query = "SELECT * FROM doctor_registration";
$result = mysqli_query($MySQLi_connection, $query);  
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

  $query1 = "SELECT * FROM appointment_list";
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
	    		<p class="Profile"> Admin Panel</p>
	        </div>
			<div class="profilename3">
	    		<p>Doctor List</p>
	        </div>

			<div class="profilename2">
	    		<button class="button3" > <a href="add_doctor.php">Add Doctor </a></button>
	        </div>
			
			

	
	<div class= "">
		<table>
			<tr>
				<th>Doctor Name</th>
				<th>BMDC No.</th>
				<th>Doctor Email</th>
				<th>Add New</th>
				
			</tr>
	<?php
	
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
?>
	    			<tr>
							<td><?php echo $row['FullName']; ?></td>
							<td><?php echo $row['BMDC_Registration']; ?></td>
							<td><?php echo $row['Email']; ?></td>
							<form action = "delete_data.php" method = "POST">
							<input type = "hidden" name = "nm" value = "<?php echo $row['FullName']?>">
							<td><input type = "submit" name = "delete" class = "button" value = "Delete"></td>
							</form>
						</tr>
			<?php
				}
			?> 
			</table>
			<div class="profilename3">
	    	<p >Appointment List </p>
	        </div>
			<div class= "">
				<table>
					<tr>
						<th>Doctor Name</th>
						<th>Patient Name</th>
						<th>Patient's Contact no.</th>
						<th></th>
						
					</tr>
			<?php
			while($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)){ 
		?>
							<tr>
									<td><?php echo $row1['Doctor_Name']; ?></td>
									<td><?php echo $row1['Full_Name']; ?></td>
									<td><?php echo $row1['Contact_No']; ?></td>
									
									<form action = "delete_data1.php" method = "POST">
							<input type = "hidden" name = "nm1" value = "<?php echo $row1['Full_Name']?>">
							<td><input type = "submit" name = "delete1" class = "button" value = "Delete"></td>
							</form>	
								</tr>
								
		
					<?php
						}
					?> 
					</table>
	</div>
</body>
</html>
