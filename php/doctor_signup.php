 <?php include('doctor_server.php');?>
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
	<link rel="stylesheet" type="text/css" href="dsignin.css">
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
            <li><a href="account.html"><i class="far fa-user-circle"></i></a></li>	
     </ul>	
	</nav>
	</div>
	</div>

	<form action="doctor_signup.php" method="POST">
	<div class="mainbody">
		<div class="box">
		    <p class="account">Create your  Account as a Doctor</p>
		    <p class="B">Already have an account ? <a href  ="doctor_login.php">  Login</a></p>
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
            <div>
            <p class="Type">Specialization</p>
            <select class ="select"name="specialization" required>
            <option disabled selected>Choose Specialization</option>
      		<option value="Cardiology">Cardiology</option>
            <option value="Neurology">Neurology</option>
            <option value="Psychiatry">Psychiatry</option>
            <option value="Respiratory medicine">Respiratory medicine</option>
            <option value="Rheumatology">Rheumatology</option>
            <option value="Nephrology">Nephrology</option>
            <option value="Endocrinology and Metabolism">Endocrinology and Metabolism</option>
            <option value="Dermatology and Venereology">Dermatology and Venereology</option>
            <option value="Gastroenterology">Gastroenterology</option>
            <option value="Hepatology">Hepatology</option>
            <option value="Hematology">Hematology</option>
            <option value="Oncology">Oncology</option>
            <option value="Internal Medicine"> Internal Medicine</option>
      	    </select>	
            </div>
            <div>
            <p class="Type">Prefarable Time (From)</p>
            <select class ="select"name="tmfrom" required>
            <option disabled selected>Prefarable Time</option>
      		<option value="8:00 am">8:00 am</option>
            <option value="9:00 am">9:00 am</option>
            <option value="10:00 am">10:00 am</option>
            <option value="11:00 am">11:00 am</option>
            <option value="12:00 pm">12:00 pm</option>
            <option value="1:00 pm">1:00 pm</option>
            <option value="2:00 pm">2:00 pm</option>
            <option value="3:00 pm">3:00 pm</option>
            <option value="4:00 pm">4:00 pm</option>
            <option value="5:00 pm">5:00 pm</option>
            <option value="6:00 pm">6:00 pm</option>
            <option value="7:00 pm">7:00 pm</option>
            <option value="8:00 pm">8:00 pm</option>
            <option value="9:00 pm">9:00 pm</option>
      	    </select>	
            </div>
            <div>
            <p class="Type">Preferable Time (To)</p>
            <select class ="select"name="tmto" required>
            <option disabled selected>Prefarable Time</option>
            <option value="9:00 am">9:00 am</option>
            <option value="10:00 am">10:00 am</option>
            <option value="11:00 am">11:00 am</option>
            <option value="12:00 pm">12:00 pm</option>
            <option value="1:00 pm">1:00 pm</option>
            <option value="2:00 pm">2:00 pm</option>
            <option value="3:00 pm">3:00 pm</option>
            <option value="4:00 pm">4:00 pm</option>
            <option value="5:00 pm">5:00 pm</option>
            <option value="6:00 pm">6:00 pm</option>
            <option value="7:00 pm">7:00 pm</option>
            <option value="8:00 pm">8:00 pm</option>
            <option value="9:00 pm">9:00 pm</option>
            <option value="9:00 pm">10:00 pm</option>
            <option value="9:00 pm">11:00 pm</option>
      	    </select>	
            </div>
            <div>
            <p class="Type">Prefarable Day </p>
            <select class ="select"name="avlday" required>
            <option disabled selected>Prefarable Day</option>
            <option value="Friday">Friday</option>
            <option value="Saturday">Saturday</option>
            <option value="Sunday">Sunday</option>
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            
      	    </select>	
            </div>
            </div>
            

         <div class="Wrapeer2">
         	<div class="Address">
            <p class="Type">Address</p>
            <input type="text" name ="address" placeholder="Enter Your Address">
            </div>
            <div class="Qualification">
            <p class="Type">Qualification</p>
            <input type="text" name ="eduqual"placeholder="Enter Your Qualification ">
            </div> 
         	<div>	
	    	<p class="Type">Educational Institution</p>
	    	<input type="text" name ="eduins" placeholder="Enter Your Institution Name">
	    	</div>
	    	<div>	
	    	<p class="Type">BMDC Reg.</p>
	    	<input type="text" name ="bmdcreg" placeholder="Enter Your BMDC Reg.">
          
	    	</div>
         
	    	<div>	
	    	<p class="Type">UserName</p>
	    	<input type="text" name ="username" placeholder="Enter Your User Name">
	    	</div>
	    	<div>	
	    	<p class="Type">Password</p>
	    	<input type="password"  name ="password" placeholder="Enter Your Password">
            </div> 

	    </div>
            <p class="policy">By clicking "SIGN UP" I agree to the Privacy Policy</p>
            <div class="Wrapeer3">
	        <div>	
	    	<button type = "submit" class="button" name = "reg_user">SIGN UP</button>
	    	</div>
	        </div>
	       
	  </form>     
	
</body>
</html>