<?php session_start(); 
 if (empty($_SESSION['ID'])) {
    header("../../views/user/Login.php");
 }
?>
  <?php
    include_once "../../config/dbh.inc.php";
   
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel ="stylesheet" , href="../../public/css/profile.css"/>
	<title>Profile</title>
    <style>
        
.username{
    display: inline;

}
.pr{
    display:flex;
    
}
    label {
    font-family:Arial, Helvetica, sans-serif;
    
}
/* img {
    width :260px;
    border-radius: 50%;

    height: 250px;
 margin-left: 5px;
     border-radius: 20px;
     display:table; 
clip-path: circle();

 } */

.zpimg {
    width :260px;
    border-radius: 50%;

    height: 250px;
 margin-left: 5px;
     border-radius: 20px;
     display:table; 
clip-path: circle();

 }


 

.im {
    width: 267px;
    height: 540px;
    
     align-items: center;
     text-align: center;
     background-color: #0d1425;
     color: #fff;
     padding: 30px 30px;
     border-radius: 0px;
 }

.a {
    
    margin-left: 10px;
    display: table;
    flex: 90%;
    padding: 30px 30px;
    font-size: 20px;
    background-color: #fff;
    border-radius: 20px;
     
}
h1 {
    font-family:Arial, Helvetica, sans-serif;
}

li {
    list-style: none;
}
h3 {
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;

}
.in {
    display: flex;
    gap: 200px;
}
li {
    font-size:x-large;
    margin-right:40px ;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
button {
    background-color:white;
    padding: 15px 32px;
    font-size: 16px;
    border-radius: 25px;
    margin-right: 40px;
    margin-top: 165px;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
   </style>
</head>
<body>
<?php include '../partials/menu.php'; ?>

<div class="pr">
        <div class="im">
            <div class="im1">
        <img class="zpimg" src="../../public/images/istockphoto-1300845620-612x612.jpg">
        <ul>
        <li><?php echo $_SESSION["Fname"]," ", $_SESSION["Lname"];?></li>
        <button type="button">Back</button>
        </ul>
            </div>
        </div>
        <div class="a">
   <h1>ABOUT</h1>
   <div class="in">
   <div class="in1">
   <div class="info1">
             <h3>Full Name</h3>
   <label><?php echo $_SESSION["Fname"]," ", $_SESSION["Lname"];?></label>
   </div>
   <br>
   <br>
   <div class="info3">
   <h3>Email</h3>
           <label><?php echo $_SESSION["Email"];?></label>
   </div>
   <br>
    <div class="in2">
    <div class="info5">
    <h3>Phone Number</h3>
           <label><?php echo $_SESSION["phone"];?></label>
    </div>
    <br>
<div class="info6">
           
</div>
<br>
<div class="info7">
   
</div>

    </div>
   </div>
   </div>
</div>
</body>
</html>
