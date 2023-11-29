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
	  <!-- <input type="checkbox" id="sun" name="sun" value="sun">
<label for="sun"> Sunday </label><br>
<input type="checkbox" id="mon" name="mon" value="mon">
<label for="mon">Monday</label><br>
<input type="checkbox" id="tues" name="tues" value="tues">
<label for="vehicle3">Tuesday</label><br>
<input type="checkbox" id="wends" name="wends" value="wends">
<label for="wends"> wendsday </label><br>
<input type="checkbox" id="thurs" name="thurs" value="thurs">
<label for="thurs">thursday</label><br>
<input type="checkbox" id="fri" name="fri" value="fri">
<label for="fri">Friday</label><br>
<input type="checkbox" id="satur" name="satur" value="satur">
<label for="satur">Saturday</label><br>  -->


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

<!-- 
      <label for="aptime" class="choose">Choose time:</label>
      <select class="selectt" name="aptime" id="aptime" required>
        <option class="optionn" value="0">select time</option>
        
      </select>
      <br><br> -->
      <!-- <a href="Home.php"> -->
        <input type="submit" class="apbtn" id="apbtn" value="submit">
        <!-- <button class="apbtn" id="apbtn" type="submit"> Submit </button> -->
    <!-- </a> -->
      
    
  </form>

<!-- ////////////////////// -->
<?php
   // Include database connection
   include_once "../../config/dbh.inc.php";

   // Check if form is submitted
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    //   $avday = $_POST["days"];
	//$avday = implode(",", $_POST["days"]); // Convert array to comma-separated string
   
	//$avday = isset($_POST["days"]) ? implode(",", $_POST["days"]) : "error";
      
	// Check if the "days" array is set and not empty
	//   $selectedDays = isset($_POST["days"]) ? $_POST["days"] : [];
    
	//   var_dump($selectedDays);



	//   // Convert the selected days to a comma-separated string
	//   $avday = implode(",", $selectedDays);


////////////////////
	$checked_arr = array();

	// Fetch checked values
	$fetchTime = mysqli_query($conn, "SELECT * FROM availabletime");
	if(mysqli_num_rows($fetchTime) > 0){
		  $result = mysqli_fetch_assoc($fetchTime);
		  $checked_arr = explode(",", $result['days']);
	}

	// Create checkboxes
	$days_arr = array("sun", "mon", "tues", "wends", "thurs", "fri", "satur");
	foreach($days_arr as $day){

		 $checked = "";
		 if(in_array($day, $checked_arr)){
			  $checked = "checked";
		 }
		 echo '<input type="checkbox" name="days[]" value="'.$day.'" '.$checked.' > '.ucfirst($day).' <br/>';
	}


	///////////////////////////////

      $startTime = $_POST["starttime"];
      $endTime = $_POST["endtime"];

      // Insert working hours into the database

      $sql = "INSERT INTO availabletime (days, starttime, endtime) VALUES ('$avday', '$startTime', '$endTime')";
      if ($conn->query($sql) === TRUE) {
         echo "Working hours set successfully!";
      } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
      }

      // Close connection
      $conn->close();
   }
?>
            



		</div>
	</div>

	<script src="./index.js"></script>


	
</body>
</html>
