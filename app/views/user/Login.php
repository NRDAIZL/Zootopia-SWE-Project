<?php session_start(); ?>
<!DOCTYPE html>
<html>
   <head>
     <title>Login</title>
     <link rel= "stylesheet" href="../../public/css/designLogin.css"/>
   </head>

   <body>
    
   <?php include '../partials/menu.php'; ?>
   <div class="center">
      <h1>Login</h1>
          <form method="post">
            <div class="txt_field">           
              <input type="text" name="Email" required>
              <span></span>
              <label>Email</label>              
            </div>
            <div class="txt_field">
              <input type="password" name="Password" required>
              <span></span>
              <label>Password</label>
            </div>
              <input type="submit" value="Submit" name="Submit">
              
              <div class="signup_link">
            <p>First Time?</p><a class="ho" href="../../views/user/SignUp.php">Sign up</a>
              </div>

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
    $_SESSION["role"]=$row["role"];
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
