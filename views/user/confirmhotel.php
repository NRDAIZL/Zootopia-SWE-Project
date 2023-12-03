<?php
  include_once "../../config/dbh.inc.php";
  session_start();
?>



<!DOCTYPE html>
<html>

<head>
    <title>Pet Hotel Booking Form</title>
    <link rel="stylesheet" href="../../public/css/calendar.css">
    <script src="../../public/javascript/hotel.js"></script>
    <script src="../../public/javascript/calendar.js"></script>

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
<?php
    function calculateNights($checkInDate, $checkOutDate) {
    $checkIn = strtotime($checkInDate);
    $checkOut = strtotime($checkOutDate);
    $difference = $checkOut - $checkIn;
    return floor($difference / (60 * 60 * 24));
}
?>

<?php include '../partials/menu.php'; ?>
<?php
// Get the booking data from the previous page
$bookingType = $_POST['booking-type'];
$checkInDate = $_POST['datepicker-check-in'];
$checkOutDate = $_POST['datepicker-check-out'];
$petId = $_POST['petId'];
// Get the number of nights
$numberOfNights = calculateNights($checkInDate, $checkOutDate);
$pricePerNight =100;

// Calculate the price of the booking
$totalPrice = $numberOfNights * $pricePerNight;

// Display the confirmation page
echo "<h1>Booking Confirmation</h1>";
echo "<p>Booking type: $bookingType</p>";
echo "<p>Check-in date: $checkInDate</p>";
echo "<p>Check-out date: $checkOutDate</p>";
echo "<p>Price: $totalPrice</p>";

echo "<form action='process.php' method='post'>";
echo "<input type='hidden' name='booking-type' value='$bookingType'>";
echo "<input type='hidden' name='check-in-date' value='$checkInDate'>";
echo "<input type='hidden' name='check-out-date' value='$checkOutDate'>";
echo "<input type='hidden' name='price' value='$totalPrice'>";
// echo "<button type='submit'>Confirm Booking</button>";
echo "</form>";

// Grab data from user if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get data from the form
    $bookingType = mysqli_real_escape_string($conn, $_POST['booking-type']);
    $checkInDate = mysqli_real_escape_string($conn, $_POST['datepicker-check-in']);
    $checkOutDate = isset($_POST['datepicker-check-out']) ? mysqli_real_escape_string($conn, $_POST['datepicker-check-out']) : null;

    // If the booking type is daytime, then the check-out date is not required
    if ($bookingType === 'daycare') {
        $checkOutDate = null;
    }

    // Convert the dates to the correct format
    $checkInDate = date_format(date_create_from_format("m/d/Y", $checkInDate), "Y-m-d");
    $checkOutDate = $checkOutDate === null ? '' : date_format(date_create_from_format("m/d/Y", $checkOutDate), "Y-m-d");

    // Escape the animal type and pet gender

    // Create an SQL query to insert the data
    // $sql = "INSERT INTO bookings (Fname,booking_type, check_in_date, check_out_date, animal_type, pet_gender)
    //         VALUES ($_SESSION[Fname],'$bookingType', '$checkInDate', '$checkOutDate', '$animalType', '$petGender')";
 $sql = "INSERT INTO bookings (client_id,pet_id,booking_type, check_in_date, check_out_date,price)
            VALUES ('" . $_SESSION['ID'] . "','$petId','$bookingType', '$checkInDate', '$checkOutDate', '$totalPrice')";

    // Perform the query
    try {
        mysqli_query($conn, $sql);
        echo "Booking successfully added to the database.";
        var_dump($petId);

    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    } finally {
        mysqli_close($conn);
    }
}
?>


</body>

</html>

