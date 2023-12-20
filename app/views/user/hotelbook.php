<?php
session_start();

  include_once "../../config/dbh.inc.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Pet Hotel Booking Form</title>
    <link rel="stylesheet" href="../../public/css/calendar.css">
    <link rel="stylesheet" href="../../public/css/hotel.css">
    <script src="../../public/javascript/hotel.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="../../public/javascript/calendar.js"></script>
    <script src="../../public/javascript/getpet.js"></script>


    <style>
    </style>
</head>

<body>

<?php 
include '../partials/menu.php';

?>

    <div class="booking-form">
        <a href="addpet.php">Can't find your pet?Add new pet</a>
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
         <label for="number-of-nights-display">Number of nights:</label>

        <div id="number-of-nights-display"></div>
        <label for="petName">Pet Name:</label>
<select id="petName" name="petName" required>
   <!-- Options will be dynamically loaded here -->
</select>
<!-- Add a hidden input field for petId -->
<input type="hidden" id="petId" name="petId">

<br>
       

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

