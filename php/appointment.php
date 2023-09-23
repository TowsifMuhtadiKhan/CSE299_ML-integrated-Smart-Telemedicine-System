<?php include("appointment_process.php")?>

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
	<link rel="stylesheet" type="text/css" href="appoinment.css">
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
     	<li><a class="" href="homepage.php">Home</a></li>
            <li><a href="aboutus.html">About Us</a></li>
            <li><a href="Services.html">Services </a></li>
            <li><a href="covid.html">Covid-19</a></li>
            <li><a href="account.html"><i class="far fa-user-circle"></i></a></li>	
     </ul>	
	</nav>
	</div>
	</div>
   <?php

$MySQLi_connection= new MySQLi('localhost','root','','cse299_project');

if(MySQLi_connect_error())
{
    die('Connect Error('.MySQLi_connect_errno().')'.MySQLi_connect_error());
}

$uname = $_SESSION['id'];
$query = "SELECT * FROM patient_registration where Username='$uname'";
$result = mysqli_query($MySQLi_connection, $query);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
 
?>
	<form action="appointment.php" method="POST">
	<div class="mainbody">
		<div class="box">
		    <p class="account">Request for an Appoinment</p>   
		 </div>   
	    <div class="Container">


	    	<div class="Wrapeer1">
	    	<div>	
	    	    <p class="Type">Name</p>
	    	    <input type="text" name ="fname" value = "<?php echo $row['Name']?>">
            <p class="Type">Gender</p>
            <select class ="select" name="gender" required>
            <option disabled selected>Choose Gender</option>
      		  <option value="male">Male</option>
            <option value="female">Female</option>
      	    </select>	
        </div>

        <div>	
	    	    <p class="Type">Contact no.</p>
	    	    <input type="text" name ="contact" value = "<?php echo $row['ContactNo']?>" readonly>	
      	    <p class="Type">Age</p>
      	    <input type ="text" name="age" required placeholder="Enter Your Age">
        </div>
        <div class="Adress">
            <p class="Type">E-mail Address</p>
            <input type="email" name ="email" value = "<?php echo $row['Email']?>" readonly>    
        </div>
        <div>
            <p class="Type">Preferable Time</p>
            <select class ="select" name="time" required>
            <option disabled selected>Prefarable Time</option>
            <option value="9:00  am">9:00 am</option>
            <option value="10:00 am">10:00 am</option>
            <option value="11:00 am">11:00 am</option>
            <option value="12:00 pm">12:00 pm</option>
            <option value="1:00  pm">1:00 pm</option>
            <option value="2:00  pm">2:00 pm</option>
            <option value="3:00  pm">3:00 pm</option>
            <option value="4:00  pm">4:00 pm</option>
            <option value="5:00  pm">5:00 pm</option>
            <option value="6:00  pm">6:00 pm</option>
            <option value="7:00  pm">7:00 pm</option>
            <option value="8:00  pm">8:00 pm</option>
            <option value="9:00  pm">9:00 pm</option>
            <option value="9:00  pm">10:00 pm</option>
            <option value="9:00  pm">11:00 pm</option>
      	    </select>
             <?php 
         $db = mysqli_connect('localhost', 'root', '', 'cse299_project');
         
         if(isset($_POST['make_apn'])){
            $docName = $_POST['nm'];
            $speclzn = $_POST['sp'];
            $pref_d = $_POST['pd'];
         }
         
         
         ?>
        </div>
            <div>
            <p class="Type">Preferable Day </p>
            <input type="text" name ="prefd" value = "<?php echo $pref_d; ?>" readonly> 
            </div>
            <div>
              <p class="Type">Fees</p>
            <input type="text" name ="fee" value="450 TK (BDT)" readonly>
            </div>
            </div>
         <br>   
         
         <p class="type">Select Your Doctor</p>   
         <br>
         <div class="Wrapeer2">
         	<div>
            <p class="Type">Doctor Name</p>
            <input type="text" name ="dname" value = "<?php echo $docName; ?>" readonly>
            	
            </div>

            <div>
            <p class="Type">Specialization</p>
            <input type="text" name ="spec" value = "<?php echo $speclzn; ?>" readonly>
            

            </div>	
	    </div>

            <br>
            <br>
	

            
           
            
            <div class="Wrapeer3">	
            <p class="Type">Transaction ID</p>
            <input type="text" name ="tran_id" placeholder="Enter your Transaction ID">
          
	    	
	        
          <button type = "submit" class="button" name = "req_apn">Request for Appoinment</button>
	    	</div>
	        </div>
	       
	     </div>  
	</form>
    <div class="Wrapeer3"><form target="_blank" action = "payment.php" method = "POST">
                <input type = "hidden" name = "pun" value = "<?php echo $uname ;?>">	
         <input type = "submit" class="button" name = "tran" value = "Get Transaction ID">
        </form>
	    	</div>
</body>
</html>