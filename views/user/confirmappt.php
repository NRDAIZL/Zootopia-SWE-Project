<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>appointment confirmation</title>
    <script src="../../public/javascript/confirmappt.js"></script>
    <link rel="stylesheet" href="../../public/css/confirmappt.css">

</head>

<body>
<?php include '../partials/menu.php';?>

    <!-- <p>The select element is used to create a drop-down list.</p> -->
<h1>hiiii</h1>

<?php


// Database configuration
$servername = "127.0.0.1 via TCP/IP";
$username = "root@localhost";
// $password = "your_password";
$dbname = "zootopia";

// Create a connection
///$password,
$conn = new mysqli($servername, $username,  $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}

// Close the connection when you're done
$conn->close();


 //include 'appointment.php';
if ($conn) {
    echo "Database connection established successfully!";
} else {
    echo "Faileddd to connect to the database.";
}

// Assuming you have established a database connection

// $query = "SELECT id, pettype, petname, apday, aptime FROM appointments";
// $result = mysqli_query($conn, $query);

// if (mysqli_num_rows($result) > 0) {
//     while ($row = mysqli_fetch_assoc($result)) {
//         // Access the retrieved data
//         $id = $row['id'];
//         $pettype = $row['pettype'];
//         $petname = $row['petname'];
//         $apday = $row['apday'];
//         $aptime = $row['aptime'];

//         // Do something with the data (e.g., display it)
//         echo "ID: $id<br>";
//         echo "Pet Type: $pettype<br>";
//         echo "Pet Name: $petname<br>";
//         echo "Appointment Day: $apday<br>";
//         echo "Appointment Time: $aptime<br>";
//         echo "<br>";
//     }
// } else {
//     echo "No appointments found.";
// }

// // Close the database connection
// mysqli_close($conn);




?>


</body>


</html>