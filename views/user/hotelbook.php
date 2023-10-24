<?php
  include_once "../../config/dbh.inc.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Pet Hotel Booking Form</title>
    <link rel="stylesheet" href="../../public/css/calendar.css">
    <script src="../../public/javascript/hotel.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <style>
        .booking-form {
            width: 500px;
            margin: 0 auto;
        }
        
        .booking-form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }
        
        .booking-form button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #000;
            color: #fff;
            cursor: pointer;
        }
        
        #number-of-nights-display {
            font-size: 16px;
            font-weight: bold;
        }
    </style>
</head>

<body>
<script src="../../public/javascript/calendar.js"></script>

<?php include '../partials/menu.php'; ?>
    <div class="booking-form">
        <h1>Pet Hotel Booking Form</h1>
        <form onsubmit="return validateForm();" action="confirmhotel.php" method="post">

        <label>
        <input type="radio" name="booking-type" value="daycare" checked>
        Daycare
        </label>

    <label>
        <input type="radio" name="booking-type" value="overnight">
        Overnight
    </label>
    
    <input type="text" id="datepicker-check-in" name= "datepicker-check-in" placeholder="Check-in date">
    <input type="text" id="datepicker-check-out" name= "datepicker-check-out" placeholder="Check-out date">
    <!-- <input type="date"  name= "datepicker-check-in" placeholder="Check-in date">
        <input type="date"  name= "datepicker-check-out" placeholder="Check-out date"> -->
         <label for="number-of-nights-display"> Number of nights:</label>

        <div id="number-of-nights-display"></div>
        <label for="animal-type">Animal Type:</label>
<select id="animal-type" name="animal-type">
    <option value="dog">Dog</option>
    <option value="cat">Cat</option>
    <option value="rabbit">Rabbit</option>
    <option value="bird">Bird</option>
    <option value="reptile">Reptile</option>
    <option value="other">Other</option>
</select>
<br>
        <label>
        <input type="radio" name="gender" value="male"> Male
    </label>
    <label>
        <input type="radio" name="gender" value="female"> Female
    </label>

        <button type="submit" value="Submit" name="Submit">Book Now</button>
        </form>
        
    </div>
    <?php
// // Grab data from user if form was submitted
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     header('Location: confirmhotel.php');

// }
?>


</body>

</html>

