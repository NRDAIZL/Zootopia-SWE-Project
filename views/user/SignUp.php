<?php
  include_once "../../config/dbh.inc.php";
?>


<!DOCTYPE html>
<html>
   <head>
     <title>Sign Up</title>
     <link rel= "stylesheet" href="../../public/css/designSignup.css"/>
   </head>

   <body>
   <?php include '../partials/menu.php'; ?>

   <div id="form">
    <h1 id="Title" style="font-family: Arial" >Sign Up</h1>
   
   <form action="" method="post">
    <div id="formBoxes">
   <label style="font-family: Arial">First Name:</label><br>
  <input type="text" name="FirstName"><br>

  <label style="font-family: Arial">Last Name:</label><br>
  <input type="text" name="LastName"><br>

  <label style="font-family: Arial">Email:</label><br>
  <input type="text" name="Email"><br>

  <label style="font-family: Arial">Password:</label><br>
  <input type="Password" name="Password"><br>

  <input style="font-family: Arial" type="submit" value="Submit" name="Submit">
  <input style="font-family: Arial" type="reset">
  <p>Already have an account?</p><a class="ho" href="../../views/user/Login.php">Sign in</a>

</div>
</form>
</div>
<?php
 //grap data from user if form was submitted 

  if($_SERVER["REQUEST_METHOD"]=="POST"){ //check if form was submitted
	$Fname=htmlspecialchars($_POST["FirstName"]);
	$Lname=htmlspecialchars($_POST["LastName"]);
	$Email=htmlspecialchars($_POST["Email"]);
	$Password=htmlspecialchars($_POST["Password"]);
	

    //insert it to database 
	$sql="INSERT INTO users(FirstName,LastName,Email,Password) 
	values('$Fname','$Lname','$Email','$Password')";
	$result=mysqli_query($conn,$sql);

    //redirect the user back to index.php 
	if($result)	{
		header("Location:Home.php");
	}
}

?>

   </body>

</html>
