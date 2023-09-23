
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
	<link rel="stylesheet" type="text/css" href="payment.css">

</head>
<?php

if(isset($_POST['tran'])){
	$uname = $_POST['pun'];
	
}

?>
<body>
    <div class="Wrapper">  
        <p class="text">Please Pay <b>450 BDT</b> for Confirming the Appoinment Process</p>
		<form action="paymentprocess.php" method = "POST">
		<input type = "hidden" class = "button" name = "punm" value = "<?php echo $uname ;?>">
        
	    <input type = "submit" class="button" name = "mp" value = "Make Payement"> 
</form>
    </div>
</body>
</html>
