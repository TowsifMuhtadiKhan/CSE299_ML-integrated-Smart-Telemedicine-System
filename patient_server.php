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
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM `doctor_registration` WHERE `Username` ='$username' OR `Email` ='$email' LIMIT 1";
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
  

      $insert = "INSERT INTO `patient_registration`(`Name`, `ContactNo`, `Email`, `Date_of_Birth`, `Gender`, `Address`, `Username`, `Password`) 
      VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
      $stmnt = $db->prepare($insert);
      $stmnt->bind_param("sissssss", $fullName, $contactNo, $email, $dateOfBirth, $gender, $address, $username, $password);
  
      $stmnt->execute();
  	$_SESSION['Username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
    ?>
    <script type="text/javascript">
            alert("Registration Successful.");
            window.location = "patient_login.php";
        </script>
        <?php
  	header('location: patient_home.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username2']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    
    $query = "SELECT * FROM `patient_registration` WHERE `Username` = '$username' AND `Password` = '$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
        
            $_SESSION['id'] = $username; 
            ?>
    <script type="text/javascript">
            alert("Login Successful.");
            window.location = "patient_profile.php";
        </script>
        <?php
            header('location:patient_profile.php');
            
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

?>