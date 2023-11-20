<?php session_start(); ?>

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
$sql = "INSERT INTO users(Fname,Lname,Email,Password) 
      values('$Fname','$Lname','$Email','$Password')";

    $result=mysqli_query($conn,$sql);
    
    var_dump($result);


      //redirect the user back to index.php 
    if($result)	{
// Retrieve the user data and set session variables
$sql = "SELECT * FROM users WHERE Email='$Email' LIMIT 1";
$result = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_assoc($result)) {
    $_SESSION["ID"] = $row["ID"];
    $_SESSION["Fname"] = $row["Fname"];
    $_SESSION["Lname"] = $row["Lname"];
    $_SESSION["Email"] = $row["Email"];
    $_SESSION["Password"] = $row["Password"];
    
    header("Location: Home.php");
    exit();
  } else {
    echo "Error retrieving user data.";
}
    } else {
      echo "Error: " . mysqli_error($conn);
  }
  }

  ?>

    </body>

  </html>
