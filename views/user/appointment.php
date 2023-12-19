<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>book an appointment</title>
  <?php
  session_start();

  include_once "../../config/dbh.inc.php";
?>
  <script src="../../public/javascript/appointment.js"></script>
  <link rel="stylesheet" href="../../public/css/calendar.css">
  <link rel="stylesheet" href="../../public/css/appointment.css?v=<?php echo time(); ?>">
  <script src="../../public/javascript/calendar.js"></script>
  <script src="../../public/javascript/getpet.js"></script>

  <style>
    .container{
      background-color:black;
    }
  </style>
</head>
<body>
<?php include '../partials/menu.php';?>

<div class="container">
    <div class="center">
     <form  action="" onsubmit="return apvalidateForm()" method="post">

        <br><br>

        <div id="petTypeError" class="error-message"></div>
        

    
        <br><br>
   

    <label for="petName">Pet Name:</label>
      <select id="petName" name="petName" required>
<?php
$ownerID = $_SESSION['ID'];

// Fetch pet names based on the owner ID
$sql = "SELECT pet_id, pet_name FROM pets WHERE owner_id = '$ownerID'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row['pet_name'] . "' data-petid='" . $row['pet_id'] . "'>" . $row['pet_name'] . "</option>";
    }
} else {
    echo "<option value=''>No pets found</option>";
}
?>


</select>
<!-- Add a hidden input field for petId -->
      <input type="hidden" id="petId" name="petId">
   <br><br>
      <label for="datepicker-check-in" class="choose">Choose a day:</label>

    <input type="date" id="apday" name= "datepicker-check-in" placeholder="Check-in date">
    

</select>
<div id="apDayError" class="error-message"></div>

      <br><br>
      <label for="aptime" class="choose">Choose time:</label>
      <select class="selectt" name="aptime" id="aptime" required>
        <option class="optionn" value="0">select time</option>
        
      </select>
      <div id="apTimeError" class="errx or-message"></div>
      <br><br>
        <input type="submit" class="apbtn" id="apbtn" value="submit">
    

    
  </form>
  </div>
<!-- ////////////////////////// -->
<?php



// Grab data from user if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get data from the form
    $pettype1 = mysqli_real_escape_string($conn, $_POST['pettype']);
    $petname1 = mysqli_real_escape_string($conn, $_POST['petname']);
    $apday11 = mysqli_real_escape_string($conn, $_POST['apday']);
    $aptime11 = mysqli_real_escape_string($conn, $_POST['aptime']);
   

    // Create an SQL query to insert the data
    $sql = "INSERT INTO appointments (pettype	,petname	,appointmentday	,appointmenttime)
            VALUES ('$pettype1', '$petname1', '$apday11', '$aptime11')";


if (empty($pettype1)) {
  //echo "plz select the pet type.<br>";
  //return false;

}

    // Perform the query
    try {
        mysqli_query($conn, $sql);
        echo "appointment registered successfully :)";
    
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    } finally {
        mysqli_close($conn);
    }

    




}


?>

</div>
  
</body>

</html>