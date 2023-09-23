<?php

error_reporting(0);

$db = mysqli_connect('localhost', 'root', '', 'cse299_project');
if(isset($_POST['delete'])){
$name = $_POST['nm'];

$query = "DELETE FROM `doctor_registration` WHERE `FullName` = '$name'";
$data = mysqli_query($db, $query);

if($data){
    echo '<script> alert("Data Deleted");</script>';
    header("location:admindoc.php");
}
}



?>