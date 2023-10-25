
<!DOCTYPE html>
<html>
   <head>
     <title></title>
   </head>

   <body>
      <h1>Login</h1>
      <form action="" method="post">
      <label>Email:</label><br>
      <input type="text" name="Email">  <br>
      <label>Password:</label><br>
      <input type="Password" name="Password"><br>
      <input type="submit" value="Submit" name="Submit">
      <input type="reset">


</form>

 <?php
   session_start();
   include_once "../../config/dbh.inc.php";
   //grab data from user and see if it exists in database
   if($_SERVER["REQUEST_METHOD"]=="POST"){

    $Email=$_POST["Email"];
	$Password=$_POST["Password"];
	$sql="Select * from users where Email ='$Email' and Password='$Password'";
	$result = mysqli_query($conn,$sql);
    if($row=mysqli_fetch_array($result))	{ //fetching the user data
		$_SESSION["ID"]=$row[0];
		$_SESSION["FName"]=$row["FirstName"];
		$_SESSION["LName"]=$row["LastName"];
		$_SESSION["Email"]=$row["Email"];
		$_SESSION["Password"]=$row["Password"];
		
		header("Location:Home.php");
	}
	else	{
		echo "Invalid Email or Password";
	}
   }

 
 ?>
   </body>
</html>
