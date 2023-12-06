<?php session_start(); ?>
<!DOCTYPE html>
<html>
   <head>
     <title>Login</title>
     <link rel= "stylesheet" href="../../public/css/designLogin.css"/>
   </head>

   <body>
    
   <?php include '../partials/menu.php'; ?>
   <div id="LoginForm">
      <h1>Login</h1>
    <form action="" method="post">
      <label>Email:</label><br>
      <input type="text" name="Email">  <br>
      <label>Password:</label><br>
      <input type="Password" name="Password"><br>
      <input type="submit" value="Submit" name="Submit">
      <input type="reset">
      <p>First Time?</p><a class="ho" href="../../views/user/SignUp.php">Sign up</a>


</form>
    </div>
 <?php
   include_once "../../config/dbh.inc.php";
   //grab data from user and see if it exists in database
   if($_SERVER["REQUEST_METHOD"]=="POST"){

    $Email=$_POST["Email"];
	$Password=$_POST["Password"];
	$sql="Select * from users where Email ='$Email' and Password='$Password'";
	$result = mysqli_query($conn,$sql);
    if($row=mysqli_fetch_array($result))	{ //fetching the user data
		$_SESSION["ID"]=$row[0];
		$_SESSION["Fname"]=$row["Fname"];
		$_SESSION["Lname"]=$row["Lname"];
		$_SESSION["Email"]=$row["Email"];
		$_SESSION["Password"]=$row["Password"];
		// var_dump($_SESSION);
		header("Location:Home.php");

	}
	else	{
		echo "Invalid Email or Password";
	}
   }

 
 ?>
   </body>
</html>
