<?php
session_start();
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'cse299_project');

//take doctor appointment
if (isset($_POST['req_apn'])) {
  // receive all input values from the form
  $fullName = mysqli_real_escape_string($db, $_POST['fname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $contactNo = mysqli_real_escape_string($db, $_POST['contact']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $age = mysqli_real_escape_string($db, $_POST['age']);
  $pref_time = mysqli_real_escape_string($db, $_POST['time']);
  $pref_day = mysqli_real_escape_string($db, $_POST['prefd']);
  $doc_name = mysqli_real_escape_string($db, $_POST['dname']);
  $spclztn = mysqli_real_escape_string($db, $_POST['spec']);

  $insert = "INSERT INTO `appointment_list`(`Full_Name`, `Gender`, `Age`, `Contact_No`, `Email_Address`, `Preferable_Day`, `Preferable_Time`, `Doctor_Name`, `Specialization`) 
  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
  $stmnt = $db->prepare($insert);
  $stmnt->bind_param("ssissssss", $fullName, $gender, $age, $contactNo, $email, $pref_day, $pref_time, $doc_name, $spclztn);

  $stmnt->execute();
  ?>
    <script type="text/javascript">
            alert("Appointment is Booked Successfully.");
            window.location = "patient_profile.php";
        </script>
        <?php 
}
?>