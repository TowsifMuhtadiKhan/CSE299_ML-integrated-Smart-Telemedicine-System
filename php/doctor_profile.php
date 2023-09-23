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
	<link rel="stylesheet" type="text/css" href="doctorui1.css">
	<script src="https://kit.fontawesome.com/398de335e7.js" crossorigin="anonymous"></script>
</head>
<?php
session_start();
$MySQLi_connection= new MySQLi('localhost','root','','cse299_project');

if(MySQLi_connect_error())
{
    die('Connect Error('.MySQLi_connect_errno().')'.MySQLi_connect_error());
}

$username = $_SESSION['id'];
$query = "SELECT * FROM doctor_registration WHERE Username='$username'";
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
            <li><a href="Services.html">Services </a></li>
            <li><a href="covid.html">Covid-19</a></li>
            <li><a href="account.html"><i class="far fa-user-circle"></i></a></li>	
     </ul>	
	</nav>
	</div>
	</div>
	
	        <div class="profilename">
	    		<p class="Profile"> <?php echo $row['FullName']; ?>'s Profile</p>
	        </div>

	<form action=# method="POST">
	<div class="mainbody">
		<div class="box">
		    <p class="account">Welcome to   your profile</p>
		    
		 </div>   
	    <div class="Container">
	    	
	    <div class="Wrapeer1">
	    	<div>	
	    	<p class="Type">Name</p>
	    	<input type="text" name ="fname" value = "<?php echo $row['FullName']; ?>" required>
	        </div>
	        <div>
	    	<p class="Type">Contact</p>
            <input type="text" name ="number" value="<?php echo $row['ContactNo']; ?>" required>	
            </div>
        </div>
        <br>
            <div class="Wrapeer1">
            <div>
            <p class="Type">Email</p>
	    	<input type="text" name ="email" value="<?php echo $row['Email']; ?>" required>
	        </div>
	        <div>
	       	<p class="Type">Date of Birth</p>
	    	<input type ="text"  name="dateOfBirth" value="<?php echo $row['Date_of_Birth']; ?>" readonly>
            </div>

            <div>
            <br>
            <p class="Type">Gender</p>
            <input type="text" name ="gender" value="<?php echo $row['Gender']; ?>">
            </div>
            </div>
            <br>
            <div class="Wrapeer3">
         	<div class="Adress">
            <p class="Type">Address</p>
            <input type="text" name ="address" value="<?php echo $row['Address']; ?>" required>
            </div>
          </div>
          <br>
          <div class="Wrapeer1">
            <div>
            <p class="Type">Educational Institution</p>
	    	<input type="text" name ="eduins" value = "<?php echo $row['Educational_Institution']?>" required>
	        </div>
	        <div>
	       	<p class="Type">Qualification</p>
            <input type="text" name ="qualifications" value="<?php echo $row['Degree_&_Qualification']; ?>" required>
            </div>
            <div>
            	<br>
           <p class="Type">Specialization</p>
            <input type="text" name ="specialization" value="<?php echo $row['Specialization']; ?>" required>
            </div>
            </div>
            <br>
            <div class="Wrapeer1">
	    	   <div>	
	    	   <p class="Type">BMDC Reg.</p>
	    	   <input type="text" name ="bmdcreg" value="<?php echo $row['BMDC_Registration']; ?>" readonly>
	           </div>
	           <div>
	    	
               </div>
            </div>
            <br>
            <div class="Wrapeer2">
                <div>
                <p class="Type">Prefarable Day </p>
                <input type="text" name ="day" value="<?php echo $row['AvailableDay']; ?>" required>
	            </div>
	            <div>
	       	    <p class="Type">Prefarable Time (From)</p>
                <input type="text" name ="from" value="<?php echo $row['AvailableTime_(From)']; ?>" required>
                </div>
                <div>
                <p class="Type">Prefarable Time (To)</p>
                <input type="text" name ="to" value="<?php echo $row['AvailableTime_(To)']; ?>" required>
                </div>
            </div>
            <div class= "meet">
                <p class="Type">Meeting Link</p>
                <input type="text" name ="mlink" value="<?php echo $row['Meet_link']; ?>" required>
                </div>
            <p class="meet">For the Meet Room Link click the following button and by joining the room click invite people and generate the link.</p>
            <br>
            <br>
            <div class="Wrapeer3">
	        <div>	
	    	<button type = "submit" class="button" name = "update">Update Profile</button>
	    	<br>
	    	<br>
	    	</div>
	        </div>
            <div class="Wrapeer3">
	        <div>	
	    	<button class="button" name = "apnt"><a href="appointment_list.php">My Appoinmnets</a></button>
	    	<br>
            <br>
            <div>	
	    	<button type = "meet" class="button" name = "reg_user"><a href="VideoChatWebApp-using-Jitsi-API-main/videochat2.html">Generate link</a></button>
            <br>
            <br>
	    	</div>
	    	</div>
	    	<div>	
	    	<button class="button" name = "logout"><a href="doctor_login.php">Logout</a></button>
            
	    	</div>
            

	        </div>

            
	    	
          </div>  

         
            
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
        $specialization = $_POST['specialization'];
        $preftmf = $_POST['from'];
        $preftmt = $_POST['to'];
        $prefd = $_POST['day'];
        $qualf = $_POST['qualifications'];
        $eduins = $_POST['eduins'];
        $bmdcreg = $_POST['bmdcreg'];
        $mlink= $_POST['mlink'];

      $query = "UPDATE `doctor_registration` SET `FullName` = '$fullname', `Gender` = '$gender', `ContactNo` = '$mnum', `Email` = '$email', `Date_of_Birth` ='$dob', `Address` = '$address', `Educational_Institution` = '$eduins', `BMDC_Registration` = '$bmdcreg', `Specialization` = '$specialization', `Degree_&_Qualification` = '$qualf', `AvailableTime_(From)` = '$preftmf', `AvailableTime_(To)` = '$preftmt', `AvailableDay` = '$prefd', `Meet_link` = '$mlink' WHERE `Username` = '$username'";
                     $result = mysqli_query($MySQLi_connection, $query);
                     
        ?> 
             <script type="text/javascript">
            alert("Profile Update Successful.");
            window.location = "doctor_profile.php";
        </script>
        <?php
                 }
                if(isset($_POST['apnt'])){
                    $_SESSION['id'] = $row['FullName'];
                    header('location:appointment_list.php');
                }
                 ?>
                 
    
        