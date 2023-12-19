<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    
    <title>Zootopia Home Page</title>
    <link rel= "stylesheet" href="../../public/css/designHome.css">
</head>

<body>
<?php include '../partials/menu.php';?>


<?php
//Checking if a user logged in or not.

if(!empty($_SESSION['ID'])) {
	echo "<h1>Welcome ".$_SESSION['Fname']."</h1>";
    echo"<a href='Logout.php'>SignOut Here</a>";

    echo '<div id="image_row1"> 
    <table id="TableContents">
        <th>
            <a href="services.php"> 
                <button id="Services">Services</button>
            </a>
        </th>
        <th>
            <a href="appointment.php">
                <button id="Appoitments">Appointments</button>
            </a>
        </th>
        

        <th>
            <a href="hotelbook.php">
                <button id="Host">Pet Hosting</button>
            </a>
        </th>
        <th>
            <a href="vaccine.php">
                <button id="Vaccines">Vaccines</button>
            </a>
        </th>
    </table>
</div>';

	
}

else{
    // var_dump($_SESSION);

    

	echo "<h1>Welcome To Zootopia!</h1>";
	
    

    echo"First time? " , "<a href='SignUp.php'>Signup Here.</a>" ;

	
    
    echo"  Already a customer? " , "<a href='Login.php'>Login.</a>", "<hr>";
	






}
?>

</html> 
