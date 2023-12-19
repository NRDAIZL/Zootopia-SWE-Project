<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>zootopia clinic</title>
    <link rel="stylesheet" href="../../public/css/menu.css?v=<?php echo time(); ?>">
    <script src="../../public/javascript/menu.js?v=<?php echo time(); ?>"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <nav>
        <img src="../../public/images/logo.png" class="logo" alt="the clinic logo"></img>
    
        <ul id="myElement" onclick="toggleHover()">
            <?php if(!empty($_SESSION['ID'])) {
           echo ' <li><a class="ho" href="../../views/user/home.php">Home</a></li>';
           echo ' <!-- <li><a class="ho" href="../../views/user/appointment.php">Book an appointment</a></li> -->';
            echo '<li><a class="ho" href="../../views/user/services.php">Services</a></li>';
            echo '<li><a class="ho" href="../../views/user/viewprofile.php">Profile</a></li>';

             echo '  <li><a class="ho" href="../../views/user/Logout.php">Logout</a></li>';


            }else{
                          echo '  <li><a class="ho" href="../../views/user/Login.php">Sign in</a></li>';

            }
?>
        </ul>
        <label id="icon">
           <i class="fas fa-bars"></i> 
        </label>
    </nav>
</body>






</html>