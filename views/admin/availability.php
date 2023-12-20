<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport"
		content="width=device-width, 
				initial-scale=1.0">
	<title>ZOOTOPIA</title> 
	<link rel="stylesheet"
		href="../../public/css/admin-main.css">
	<link rel="stylesheet"
		href="../../public/css/admin-res.css">
        <script src="../../public/javascript/admin.js"></script>
        <script src="../../public/javascript/availability.js"></script>

</head>

<body>

	<!-- for header part -->
	<header>

	<?php include '../partials/admin-header.php';?>


	</header>

	<div class="main-container">
		<div class="navcontainer">
        <?php include '../partials/admin-sidenav.php';?>

		</div>
		<div class="main">

			<div class="searchbar2">
				<input type="text"
					name=""
					id=""
					placeholder="Search">
				<div class="searchbtn">
				<img src="../../public/images/searchicon.png"
						class="icn srchicn"
						alt="search-button">
				</div>
			</div>
			
<h1>Plz enter your working hours </h1>

<form action="" method="post">
   


      <label for="days" class="choose">Choose a day:</label>

<br>
	  

<input type="checkbox" id="sun" name="days[]" value="sun">
    <label for="sun"> Sunday </label><br>
    <input type="checkbox" id="mon" name="days[]" value="mon">
    <label for="mon">Monday</label><br>
    <input type="checkbox" id="tues" name="days[]" value="tues">
    <label for="tues">Tuesday</label><br>
    <input type="checkbox" id="wends" name="days[]" value="wends">
    <label for="wends">Wednesday</label><br>
    <input type="checkbox" id="thurs" name="days[]" value="thurs">
    <label for="thurs">Thursday</label><br>
    <input type="checkbox" id="fri" name="days[]" value="fri">
    <label for="fri">Friday</label><br>
    <input type="checkbox" id="satur" name="days[]" value="satur">
    <label for="satur">Saturday</label><br>


      
      <br><br>

	  <label for="starttime">Start Time:</label>
   <input type="text" name="starttime" required>

   <label for="endtime">End Time:</label>
   <input type="text" name="endtime" required>


        <input type="submit" name="submit" class="apbtn" id="apbtn" value="submit">
        
      
    
  </form>

<!-- //////////////////////////////// -->


<!-- ?php

$date = "22-02-2021 14:22:22";
$newDate = date("d-m-Y H:i:s", strtotime($date.' +1 hour'));

? -->


<!-- //////////////////////// -->

<?php

// Include database connection
include_once "../../config/dbh.inc.php";


if (isset($_POST['submit'])) {
    $days = implode("','", $_POST['days']); // Convert array to a comma-separated string
    $queryDelete = "DELETE FROM availabletime";
   // echo "DELETE query: $queryDelete"; // Add this line for debugging
    mysqli_query($conn, $queryDelete);

    $startTime = $_POST["starttime"];
    $endTime = $_POST["endtime"];

    $numbers = range($startTime, ($endTime - 1));

    if (!empty($_POST['days'])) {
        foreach ($_POST['days'] as $selectedd) {
            foreach ($numbers as $number) {
                if ($selectedd == "sun") {
                    mysqli_query($conn, "INSERT INTO availabletime (days, starttime, endtime, slotStart) VALUES ('Sunday', '$startTime', '$endTime', '$number')");
                } elseif ($selectedd == "mon") {
                    mysqli_query($conn, "INSERT INTO availabletime (days, starttime, endtime, slotStart) VALUES ('Monday', '$startTime', '$endTime', '$number')");
                } elseif ($selectedd == "tues") {
                    mysqli_query($conn, "INSERT INTO availabletime (days, starttime, endtime, slotStart) VALUES ('Tuesday', '$startTime', '$endTime', '$number')");
                } elseif ($selectedd == "wends") {
                    mysqli_query($conn, "INSERT INTO availabletime (days, starttime, endtime, slotStart) VALUES ('Wendsday', '$startTime', '$endTime', '$number')");
                } elseif ($selectedd == "thurs") {
                    mysqli_query($conn, "INSERT INTO availabletime (days, starttime, endtime, slotStart) VALUES ('Thursday', '$startTime', '$endTime', '$number')");
                } elseif ($selectedd == "fri") {
                    mysqli_query($conn, "INSERT INTO availabletime (days, starttime, endtime, slotStart) VALUES ('Friday', '$startTime', '$endTime', '$number')");
                } elseif ($selectedd == "satur") {
                    mysqli_query($conn, "INSERT INTO availabletime (days, starttime, endtime, slotStart) VALUES ('Saturday', '$startTime', '$endTime', '$number')");
                }
            }
        }
    }

    // Assuming the insertion is successful
    echo "Set successfully";

    $conn->close();
}



?>
            



		</div>
	</div>

	<script src="./index.js"></script>


	
</body>
</html>

<!-- IF (
    SELECT COUNT(*)                -- resources/courts reserved
        FROM reservation
        WHERE club_code = $club_code
        AND   date_time = $date_time
    ) = 0
THEN PRINT "All courts available"
ELSE IF (
        SELECT COUNT(*)            -- resources/courts that exist
            FROM club_resource_slot
            WHERE club_code = $club_code
            AND   date_time = $date_time
        ) = (
        SELECT COUNT(*)            -- resources/courts reserved
            FROM reservation
            WHERE club_code = $club_code
            AND   date_time = $date_time
        )
    THEN PRINT "All courts reserved"
    ELSE PRINT "Some courts available" -->