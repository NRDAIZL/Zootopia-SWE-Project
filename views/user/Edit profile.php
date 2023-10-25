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
</style>
</head>
<body>
    <div class="b1" >
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
        <input type="text" required value="Ahmed" name="FirstName" >
            </div>
            <br>
            <div class="b4">
            <label>Last Name:</label>
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
    
</body>
</html>