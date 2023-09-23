
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
	<link rel="stylesheet" type="text/css" href="doctorlist.css">
	<script src="https://kit.fontawesome.com/398de335e7.js" crossorigin="anonymous"></script>
</head>

<?php
session_start();
$MySQLi_connection= new MySQLi('localhost','root','','cse299_project');

if(MySQLi_connect_error())
{
    die('Connect Error('.MySQLi_connect_errno().')'.MySQLi_connect_error());
}
if(isset($_POST['dlist'])){
$uname1 = $_POST['puname'];


$query = "SELECT * FROM doctor_registration";
$result = mysqli_query($MySQLi_connection, $query);  
  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
}
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
	    		<p class="Profile"> Doctor List</p>
	        </div>

	
	<div class="mainbody">
	<?php
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
		    
?>
	    <div class="Container">
	    	<div class="Wrapeer1">
	    	<div>	
	    	<img class="doctorpic" 
			src ="maledoctor.png" alt="My sample image" height="300">	
            </div>
			
		<div class="details">	
	    <p class="Type"><b>Doctor Name:</b> <?php echo $row['FullName']; ?></p>    
	    <p class="Type"> <b>Specialization:</b> <?php echo $row['Specialization']; ?></p>
		<p class="Type"><b>Educational Qualification:</b> <?php echo $row['Degree_&_Qualification']; ?></p> 
	    <p class="Type"><b>Educational Institution: </b><?php echo $row['Educational_Institution']; ?></p>
		<p class="Type"><b>Preferable Day: </b><?php echo $row['AvailableDay']; ?></p>
		<p class="Type"><b>Preferable Time (from): </b><?php echo $row['AvailableTime_(From)']; ?></p>
		<p class="Type"><b>Preferable Time (to): </b><?php echo $row['AvailableTime_(To)']; ?></p>

	   
        </div>
		
		
            <div>
			<form action = "appointment.php" method="POST">
			<input type = "hidden" name = "nm" value = "<?php echo $row['FullName']; ?>">
			<input type = "hidden" name = "sp" value = "<?php echo $row['Specialization']; ?>">
			<input type = "hidden" name = "pd" value = "<?php echo $row['AvailableDay']; ?>">
			<input type = "hidden" name = "nm1" value = "<?php echo $uname1; ?>">
	    	<input type = "submit" name = "make_apn" class = "button" value = "Make Appointment"></a></button>
			</form>
	    	</div>
            
            
            </div>
	</div>
			<?php
			
			
				
		   
	}
	?>
	
	    
	

</body>
</html>
