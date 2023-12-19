<?php session_start(); ?>
  <?php
    include_once "../../config/dbh.inc.php";
  ?>
  <!DOCTYPE html>
  <html>
    <head>
      <title>Sign Up</title>
      <script src="eventHandler.js"></script>
      <link rel= "stylesheet" href="../../public/css/designSignup.css"/>
    </head>

    <body>
    
    <?php include '../partials/menu.php'; ?>
    <div class="center">
        <h1>SignUp</h1>
          <form method="post">
            <div class="txt_field">
              <input type="text" name="FirstName" required>
              <span></span>
              <label>First Name</label>
            </div>
            <div class="txt_field">
              <input type="text" name="LastName" required>
              <span></span>
              <label>Last Name</label>
            </div>
            <div class="txt_field">    
              <input type="text" name="Email" required>
              <span></span>
              <label>Email</label>
            </div>
            <div class="txt_field">
              <input type="Password" name="Password" required>
              <span></span>
              <label>Password</label>
            </div>
              <input type="submit" value="Submit" name="Submit">
            <div class="signup_link">
              <p>Have an account?</p><a class="ho" href="../../views/user/Login.php">Sign in</a>
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

    if(strlen($Fname)< 3){ //Validated Name
      echo "Name too short, please enter a suitable name.";
    }
    elseif(true===false){ //Validate Email
      echo "Please enter valid Email.";
    }
    elseif(strlen($Password)<6){ //Validate Password
      echo "Password should be 7 characters or more.";
    }
    else{
      $sql = "INSERT INTO users(FirstName,LastName,Email,Password)
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
    $_SESSION["FirstName"] = $row["FirstName"];
    $_SESSION["LastName"] = $row["LastName"];
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
    }
  ?>

    </body>

  </html>
