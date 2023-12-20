
<?php session_start(); ?>
  <?php
    include_once "../../config/dbh.inc.php";
   
  ?>
  
  <!DOCTYPE html>
  <html>
    <head>
      <title>Profile</title>
    </head>

    <body>
    
    <?php include '../partials/menu.php'; ?>
    <div class="center">
        <h1>Profile</h1>
          <form method="post">
            <div class="txt_field">
              <label><?php echo $_SESSION["Fname"]," ", $_SESSION["Lname"]; ?></label>
            </div>
            <div class="txt_field">
              <label><?php echo $_SESSION["Email"]?></label>
            </div>
            <div class="txt_field">
              <label><?php echo $_SESSION["Password"]?></label>
            </div>      
            
</body>
</html>
<?php


// Include connection

?>
<h1>Edit Profile</h1>


<form action='' method='post'>
	First Name:<br>
	<input type='text' value="<?=$_SESSION['Fname']?>" name='Fname'><br>
	Last Name:<br>
	<input type='text' value="<?=$_SESSION['Lname']?>" name='Lname'><br>
	Email:<br>
	<input type='text' value="<?=$_SESSION['Email']?>" name='Email'><br>
	Password:<br>
	<input type='text' value="<?=$_SESSION['Password']?>" name='Password'><br>

	<input type='submit' value='Edit' name='Submit'>
</form>


<?php
 include_once "../../config/dbh.inc.php";

if($_SERVER['REQUEST_METHOD']== "POST"){ //check if form was submitted
	$Fname=$_POST["Fname"];
	$Lname=$_POST["Lname"];
	$Email=$_POST["Email"];
	$Password=$_POST["Password"];

	$sql="update  users set Fname='$Fname', Lname='$Lname', Email='$Email', Password='$Password',
	where ID =".$_SESSION['ID'];
    
    $_SESSION["Fname"]=$Fname;
		$_SESSION["Lname"]=$Lname;
		$_SESSION["Email"]=$Email;
		$_SESSION["Password"]=$Password;

}
?>
