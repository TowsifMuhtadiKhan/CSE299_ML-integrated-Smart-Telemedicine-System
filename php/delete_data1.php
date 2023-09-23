<?php

error_reporting(0);
$db = mysqli_connect('localhost', 'root', '', 'cse299_project');
if(isset($_POST['delete1'])){
    $name1 = $_POST['nm1'];

$query1 = "DELETE FROM `appointment_list` WHERE `Full_Name` = '$name1'";
$data1 = mysqli_query($db, $query1);

if($data1){
    echo '<script> alert("Data Deleted");</script>';
    header("location:admindoc.php");
}
}


?>