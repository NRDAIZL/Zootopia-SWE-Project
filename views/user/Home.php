<!DOCTYPE html>
<html>
<head>
    
    <title>Zootpia Home Page</title>
    <link rel= "stylesheet" href="../../public/css/designHome.css"/>
</head>

<body>
<?php include '../partials/menu.php';?>
<hr>
<?php
session_start();
//Checking if a user logged in or not.

if(!empty($_SESSION['ID'])) {
	echo "<h1>Welcome ".$_SESSION['FirstName']."</h1>";
	
}

else{
	echo "<h1>Welcome To Zootopia!</h1>";
	
    

    echo"First time? " , "<a href='SignUp.php'>Signup Here.</a>" ;

	
    
    echo"  Already a customer? " , "<a href='Login.php'>Login.</a>", "<hr>";
	
}
?>
<div id="image_row1">
<br><br>
<a href="Home.php"> <!-- Waiting for sondos to add the services page -->
    <button id="Services">Services</button>
</a>

<br><br>
<a href="appointment.php">
<button id="Appoitments">Appointments</button>
</a>
</div>


<br><br>
<a href="hotelbook.php">
<button id="Host">Pet Hosting</button>
</a>

<br><br>
<button id="Vaccines" >Vaccines</button>


</html>
