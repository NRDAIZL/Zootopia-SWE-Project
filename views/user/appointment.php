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
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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

</select>
<!-- Add a hidden input field for petId -->
      <input type="hidden" id="petId" name="petId">
   <br><br>
      <label for="datepicker-check-in" class="choose">Choose a day:</label>

    <input type="date" id="apday" name= "datepicker-check-in" placeholder="Check-in date">
    

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
    $appday = mysqli_real_escape_string($conn, $_POST['datepicker-check-in']);
    $apptime = mysqli_real_escape_string($conn, $_POST['aptime']);
    $petId = mysqli_real_escape_string($conn, $_POST['petId']);


    // Create an SQL query to insert the data
    $sql = "INSERT INTO appointments (client_id, pet_id	,appointmentday	,appointmenttime)
            VALUES ( '" . $_SESSION['ID'] . "','$petId','$appday', '$apptime')";




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

  
</body>

</html>