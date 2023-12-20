<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>book an appointment</title>
  <?php
  include_once "../../config/dbh.inc.php";
?>
  <script src="../../public/javascript/appointment.js"></script>
  <link rel="stylesheet" href="../../public/css/appointment.css?v=<?php echo time(); ?>">
 
  
</head>
<body>
  
<?php include '../partials/menu.php';?>
<!-- ?php include '../partials/footer.php';?> -->
    <!-- <p>The select element is used to create a drop-down list.</p> -->
    
    <!-- <form action="/action_page.php"> -->
<!-- ///////////////////// -->
<div class="container">
    <!-- onsubmit="return apvalidateForm()" -->
     <form  action="" onsubmit="return apvalidateForm()" method="post">
    <!-- <div class="row"> -->
      <!-- <div class="col-25"> -->
        <br><br>
        <label for="pettype" class="choose">Pet type:</label>
      <!-- </div> -->
      <!-- <div class="col-75"> -->
        <select id="pettypeid" class="selectt" name="pettype" class="pettypee"  required>
        
        <div class="optionn">

        <option value="0">select pet</option>
          <option value="dog">Dog</option>
          <option value="cat">Cat</option>
          <option value="rabbit">Rabbit</option>
          <option value="fish">Fish</option>
          <option value="bird">Bird</option>
          <option value="turtle">Turtle</option>
          <option value="horse">Horse</option>
          <option value="hamster">Hamster</option>
          <option value="reptile">Reptile</option>
          <option value="other">Other</option>
        </div>
        </select>
        <div id="petTypeError" class="error-message"></div>
        

      <!-- </div> -->
    <!-- </div> -->

    <!-- <div class="row">
      <div class="col-25"> -->
        <br><br>
        <label for="petname" class="choose">Pet Name:</label>
      <!-- </div> -->
      <!-- <div class="col-75"> -->
        <input type="text" id="petnameid" name="petname" placeholder="Your pet name ;) " class="optionn" >
      <!-- </div> -->
    <!-- </div> -->






      
      <?php
//display avaliable days and times from database in dropdown lists
$query = 'SELECT days FROM availabletime';
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // Fetch rows and store them in an array
    $rows = $result->fetch_all(MYSQLI_ASSOC);
} else {
    echo 'No data found.';
}
?>
      <br><br>
      <label for="apday" class="choose">Choose a day:</label>
     
<select class="selectt" name="apday" id="apday" onchange="updateaptime()">
    <option value="">Select day</option>
    <?php
    foreach ($rows as $row) {
        $day = $row['days'];
        echo "<option value=\"$day\">$day</option>";
    }
    ?>
</select>
<div id="apDayError" class="error-message"></div>

      <br><br>
      <label for="aptime" class="choose">Choose time:</label>
      <select class="selectt" name="aptime" id="aptime" required>
        <option class="optionn" value="0">select time</option>
        
      </select>
      <div id="apTimeError" class="error-message"></div>
      <br><br>
      <!-- <a href="Home.php"> -->
        <input type="submit" class="apbtn" id="apbtn" value="submit">
        <!-- <button class="apbtn" id="apbtn" type="submit"> Submit </button> -->
    <!-- </a> -->
      <!-- Inside the body of your HTML -->
      
      <!-- <div id="errorMessage" class="error-message-container"></div> -->
    
  </form>
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


// if (empty($pettype1)) {
//   echo "plz select the pet type.<br>";
//   return false;
// }

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