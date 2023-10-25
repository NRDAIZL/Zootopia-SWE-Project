<!DOCTYPE html>
<html>
<head>
    
    <title>Zootpia Home Page</title>
    <link rel= "stylesheet" href="../../public/css/designHome.css"/>
</head>

<body>
<?php include '../partials/menu.php'; ?>
<hr>
<?php
session_start();
//Checking if a user logged in or not.

if(!empty($_SESSION['ID'])) {
	echo "<h1>Welcome ".$_SESSION['FName']."</h1>";
	//when mohammed does the profile viewer it will go here.
}
else{
	echo "<h1>Welcome To Zootopia!</h1>";
	
    

    echo"First time? " , "<a href='SignUp.php'>Signup Here.</a>" ;

	
    
    echo"  Already a customer? " , "<a href='Login.php'>Login.</a>", "<hr>";
	
}
?>
<br><br>
<button id="Services">Services</button>
<br><br>
<button id="Appoitments">Appoitments</button>
<br><br>
<button id="Host">Pet Hosting</button>
<br><br>
<button id="Vaccines" >Vaccines</button>


</html>
