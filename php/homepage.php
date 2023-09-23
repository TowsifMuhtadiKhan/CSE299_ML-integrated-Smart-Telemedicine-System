<!DOCTYPE html>
<html>
<head>
	<title>VHSBD</title>
	<link href="https://fonts.googleapis.com/css2?family=Cabin&family=Montserrat&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet"
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">

    

	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Roboto:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="homen.css">

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
?>
<body>
	<div class="Header">
		<div class="logo">
			<img class="logopic"src ="logo.png" alt="My sample image" height="100">	
		</div>

		<div class ="navbar">
		<nav>
            <ul class="navlinks">
     	    <li><a class ="active" href="#">Home</a></li>
            <li><a href="aboutus.html">About Us</a></li>
		    <li><a href="Services.html">Services</a></li>
     	    <li><a href="covid.html">Covid-19 </a></li>
            <li><a href="account.html"><i class="far fa-user-circle"></i></a></li>
                <br>
            </ul>	
	    </nav>
	    </div>
	</div>

	<div class="Homepagebg">
		<img class="logopic" src ="HomePageBanner.jpg" alt="My sample image" width="100%" >
	</div>
	<p class ="Service">Our Services</p>

    <div class="Wrapper">
        <div class="icon">
        <img class="logopic" src ="Cancer.png" alt="My sample image" width="40%">
        </div>
        <div class="content">
        <p class="headingtop">Cancer Predictor</p>
        <br>
        <p class="heading">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available. It is also used to temporarily replace text in a process called greeking, which allows designers to consider the form of a webpage or publication, without the meaning of the text influencing the design.</p>
        <br>
        <button class="button"><a href = "patient_login.php">Predict Cancer</a></button>
        <br>
        </div>
        <div class="icon">
        <img class="logopic" src ="Appoinment.png" alt="My sample image" width="40%">
        

        </div>
        <div class="content">
            <p class="headingtop">Appoinment with Doctor</p>
            <br>
            <p class="heading">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available. It is also used to temporarily replace text in a process called greeking, which allows designers to consider the form of a webpage or publication, without the meaning of the text influencing the design.</p>
            <br>
            <button class="button"><a href = "patient_login.php">Make Appointment</a></button>
        <br>
        </div>
        <div class="icon">
        <img class="logopic" src ="Emergency.png" alt="My sample image" width="40%">
        </div>
        <div class="content">
        <p class="headingtop">Emergency Service</p>
         <br>
        <p class="heading">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available. It is also used to temporarily replace text in a process called greeking, which allows designers to consider the form of a webpage or publication, without the meaning of the text influencing the design.</p>
        <br>
        <button class="button"><a href = "https://meet.jit.si/vZbIH6PoMJ9z28Q2rU7IoCeyRmNsnh">Call Now</a></button>
        </div> 
             
    </div>
    <p class ="Service">Our Doctors</p>
<div class="doctorcon">
    <?php
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ 
?>
<div class="minicon">
    <div class="container">	
        <img class="doctorpic" src ="maledoctor.png" alt="My sample image" height="200">	
        <p class="Type"><b>Doctor Name:</b> <?php echo $row['FullName']; ?>  </p>
        <p class="Type"><b>Specialization: </b><?php echo $row['Specialization']; ?></p>
        <p class="Type"><b>Institution:</b> <?php echo $row['Educational_Institution']; ?></p>	
        <button class="buttondoc" name = "make_apn"><a href = "patient_login.php">Make Appointment</a></button> 
    </div>
  </div>
    <?php
	}
	?>
</div>

		

<div class="footer">
    <div class="wrap-1">
        <p class="fcon">About US</p><br>
        <p class="fcon2"> In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to
            demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available. It is also used to temporarily replace text in a process called greeking, which allows designers to consider the form of 
            a webpage or publication, without the meaning of the text influencing the design.</p>
    </div>
    <div class="wrap-1">
   
        <p class="fcon">Contact Us</b></p><br>
        <p class="fcon2">Adress:</b> </p><br>
        <p class="fcon2">House:##, Road:##, Block: ##, Banai, Dhaka </p><br>
        <p class="fcon2">Call: </b>10589</p><br>
        <a href ="https://www.facebook.com/Audi-Bangladesh-1438759706436292" >
  <img src ="fb.png" alt="My sample image" width="80">
</a>   

<a href ="https://www.facebook.com/Audi-Bangladesh-1438759706436292" >
  <img src ="insta.png" alt="My sample image" width="80">
</a>

<a href ="https://www.youtube.com/user/AudiofAmerica" >
  <img src ="youtube.png" alt="My sample image" width="80">
</a>
    </div>

</div>
</body>
</html>