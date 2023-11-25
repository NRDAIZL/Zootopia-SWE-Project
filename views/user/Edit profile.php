<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Edit profile</title>
<style>
    h1 {
        font-family:Arial, Helvetica, sans-serif;
        color: white;
        margin-left: 70px;
       margin-block:initial;
       margin-bottom: 50px;
       text-indent: 10px;
    }
input {
    height: 35px;

}
.b1 {
    background-color: black;
    width: 100%;
    height: 105px;
     
}
.gen1 {
    display: flex;
}
.left1 {
    width: 27%;
    height: 475px;
    background-color: white;
}
.r1 {
    width: 27%;
    height: 475px;
    background-color: white;
}
.b2 {
    width: 65%;
    height: 475px;
    background-color: white;
}
.b3 {
    display: flex;
}
h4 {
    font-family:Arial, Helvetica, sans-serif;
    font-size:20px;
}

.b3 {
    display:grid;
    gap: 15px;
}
.b4 {
    display:grid;
    gap: 15px;
}
.b5 {
    display: grid;
    gap: 15px;
}
.b6 {
    display:grid;
    gap: 15px;
}
label {
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: larger;
}
.b2 {
    grid-column: 30px;
}
.btn {
    width: 100%;
}
button {
    background-color:black;
    padding: 14px 25px;
    font-size: 16px;
    border-radius: 18px;
    color: white;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
#qwe {
    margin-right:250 px;
    margin-top: 24px;
}
#qaz {
    margin-left:250px;
    margin-top: 24px;
}
    samp {
    color: red;
    font-family:'Times New Roman', Times, serif;
}
</style>
</head>
<body>
    <div class="b1" >
        <form method="post">
    <?php
//session_start(); 
  $host ="localhost";
  $user="root";
  $pass="123459";
  $db="test4"; 
$conn= mysqli_connect($host,$user,$pass,$db);
$Fname="";
$Lname="";
$Email="";
$Password="";
if(isset($_POST['FirstName'])){
    $Fname=$_POST['FirstName'];
}
if(isset($_POST['LastName'])){
    $Lname=$_POST['LastName'];
}
if(isset($_POST['email'])){
    $Email=$_POST['email'];
}
if(isset($_POST['password'])){
    $Password=$_POST['password'];
}
if(!preg_match("/^[A-Z][a-z]+$/", $Fname)){
$FnError="Invalid first name";
$error=1;
}
if(!preg_match("/^[A-Z][a-z]+$/", $Lname)){
    $LnError="Invalid last name";
    $error=1;
    }
$EError="";
$PError="";
//$sql1="insert into users value('Ahmed','Ali','ahmed2157@gmail.com','ufyt')";
 if (isset($_POST['update'])){
   $sql1="update users set FirstName= '$Fname' ,LastName = '$Lname' ,Password ='$Password' where Email='$Email'";
 mysqli_query($conn,$sql1);
//header("location: menu.php");


      
    
}
 

if (isset($_POST['cancel'])){
    
    header("location: menu.php");

}
?>
        <br><br>
<h1>Edit Profile</h1>
    </div>
    <br>
    <div class="gen1">
        <div class="left1"></div>
    <div class="b2">
              <fieldset>
            <legend>User Info</legend>
            <div class="b3">
            <label>First Name:</label>
                   <samp><?php if(!empty($FnError)){echo $FnError; }?></samp>
        <input type="text" required value="Ahmed" name="FirstName" >
            </div>
            <br>
            <div class="b4">
            <label>Last Name:</label>
                    <samp><?php if(!empty($LnError)){echo $LnError; }?></samp>
        <input type="text" required value="Mohamed" name="LastName">
            </div>
            <br>
            <div class="b5">
            <label>Email:</label>
        <input type="email" required value="ahmed@gmail.com" name="email">
            </div>
            <br>
            <div class="b6">
            <label>Password:</label>
        <input type="password" required value="Ahgeuie54#" name="password" disabled>
            </div>
            <button type="button" id="qaz">Cancel</button>
    <button type="button" id="qwe">Save</button>
              </fieldset>
            
    </div>
    
    <div class="r1"></div>
    </div>
    <?php
session_start(); 
  $host ="localhost";
  $user="root";
  $pass="123459";
  $db="test4"; 
$conn= mysqli_connect($host,$user,$pass,$db);
//$Fname="";
$Lname="";
$Email="";
$Password="";
if(isset($_POST['FirstName'])){
    $Fname=$_POST['FirstName'];
}
if(isset($_POST['LastName'])){
    $Lname=$_POST['LastName'];
}
if(isset($_POST['email'])){
    $Email=$_POST['email'];
}
if(isset($_POST['password'])){
    $Password=$_POST['password'];
}

$FnError="";
$LnError="";
$EError="";
$PError="";
//$sql1="insert into users value('Ahmed','Ali','ahmed2157@gmail.com','ufyt')";
 if (isset($_POST['update'])){
   $sql1="update users set FirstName= '$Fname' ,LastName = '$Lname' ,Password ='$Password' where Email='$Email'";
 mysqli_query($conn,$sql1);
//header("location: menu.php");

 }

if (isset($_POST['cancel'])){
    
    header("location: menu.php");

}
?>
    </form>
</body>
</html>
