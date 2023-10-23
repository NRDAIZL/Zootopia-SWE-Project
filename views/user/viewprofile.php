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
img {
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
        <img src="../../public/images/istockphoto-1300845620-612x612.jpg">
        <ul>
        <li>Ahmed Mohamed</li>
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
   <label> Ahmed Mohamed</label>
   </div>
   <br>
   <div class="info2">
           <h3>User Name</h3>
           <label>ahmed3459</label>
   </div>
   <br>
   <div class="info3">
   <h3>Email</h3>
           <label>ahmed@gmail.com</label>
   </div>
   <br>
   
    <div class="info4">
    <h3>Gender</h3>
           <label>male</label>
    </div>
   </div>
    <div class="in2">
    <div class="info5">
    <h3>Phone Number</h3>
           <label>01175848488</label>
    </div>
    <br>
<div class="info6">
    <h3>Address</Address></h3>
           <label>Nasr city</label>
</div>
<br>
<div class="info7">
    <h3>Birth Date</h3>
           <label>1/5/2003</label>
</div>

    </div>
   </div>
   </div>
</div>
</body>
</html>
