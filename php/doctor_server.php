<?php

session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'cse299_project');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $fullName = mysqli_real_escape_string($db, $_POST['fname']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $contactNo = mysqli_real_escape_string($db, $_POST['cnumber']);
  $dateOfBirth = mysqli_real_escape_string($db, $_POST['dateOfBirth']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $spclztn = mysqli_real_escape_string($db, $_POST['specialization']);
  $avltm_from = mysqli_real_escape_string($db, $_POST['tmfrom']);
  $avltm_to = mysqli_real_escape_string($db, $_POST['tmto']);
  $avl_day = mysqli_real_escape_string($db, $_POST['avlday']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $edu_qual = mysqli_real_escape_string($db, $_POST['eduqual']);
  $edu_ins = mysqli_real_escape_string($db, $_POST['eduins']);
  $bmdc_reg = mysqli_real_escape_string($db, $_POST['bmdcreg']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  


  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM `doctor_registration` WHERE `Username` ='$username' OR `Email` ='$email' OR `BMDC_Registration` ='$bmdc_reg' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['Username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['Email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	//encrypt the password before saving in the database

    $insert = "INSERT INTO `doctor_registration`(`FullName`, `Gender`, `ContactNo`, `Email`, `Date_of_Birth`, `Address`, `Educational_Institution`, `BMDC_Registration`, `Specialization`, `Degree_&_Qualification`, `AvailableTime_(From)`, `AvailableTime_(To)`, `AvailableDay`, `Username`, `Password`) 
  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
  $stmnt = $db->prepare($insert);
  $stmnt->bind_param("ssissssssssssss", $fullName, $gender, $contactNo, $email, $dateOfBirth, $address, $edu_ins, $bmdc_reg, $spclztn, $edu_qual, $avltm_from, $avltm_to, $avl_day, $username, $password);

  $stmnt->execute();
  	$_SESSION['Username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
    
  	header('location: doctor_home.php');
    ?> 
        
        <?php
    $stmnt->close();
    $db->close();
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username1']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  
  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    
    $query = "SELECT * FROM `doctor_registration` WHERE `Username` = '$username' AND `Password` = '$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
        
            $_SESSION['id'] = $username; 
            echo "<h1><center> Login successful </center></h1>";
            header('location:doctor_profile.php');
            ?> 
        <script type="text/javascript">
            alert("Login Successful.");
            window.location = "doctor_login.php";
        </script>
        <?php
            
    }
  }
}

?>