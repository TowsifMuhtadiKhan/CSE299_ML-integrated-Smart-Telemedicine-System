<?php
$MySQLi_connection= new MySQLi('localhost','root','','cse299_project');

if(MySQLi_connect_error())
{
    die('Connect Error('.MySQLi_connect_errno().')'.MySQLi_connect_error());
}
if(isset($_POST['update'])){
        $fullname = $_POST['fname'];
        $dob = $_POST['dateOfBirth'];
        $gender = $_POST['gender'];
        $mnum = $_POST['number'];
        $email = $_POST['email'];
        $address = $_POST['address'];

        $query = "UPDATE `patient_registration` SET `Name` = '$fullname', `ContactNo` = '$mnum', `Email` = '$email', `Date_of_Birth` ='$dob', `Gender` = '$gender', `Address` = '$address' WHERE `Username` = '$uname'";
                      $result = mysqli_query($MySQLi_connection, $query);
                      
            ?> 
        <script type="text/javascript">
            alert("Profile Update Successful.");
            window.location = "patient_profile.php";
        </script>
        <?php
                 }

	 

    ?>