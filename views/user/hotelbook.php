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
    <script>
       $(document).ready(function () {
    function loadPetNames() {
        // Make an AJAX request to fetch pet names based on the owner ID
        $.ajax({
            type: "GET",
            url: "get_pet_names.php", // Create a new PHP file to handle this AJAX request
            success: function (data) {
                $("#petName").html(data);
            }
        });
    }

    loadPetNames(); // Load initial pet names on page load
});

    </script>
</head>

<body>
<script src="../../public/javascript/calendar.js"></script>

<?php include '../partials/menu.php';
session_start();
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
         <label for="number-of-nights-display"> Number of nights:</label>

        <div id="number-of-nights-display"></div>
        <label for="petName">Pet Name:</label>
<select id="petName" name="petName" required>
   <!-- Options will be dynamically loaded here -->
</select>

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

