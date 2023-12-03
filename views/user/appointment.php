<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>book an appointment</title>
  <script src="../../public/javascript/appointment.js"></script>
  <link rel="stylesheet" href="../../public/css/appointment.css?v=<?php echo time(); ?>">
  <?php
  include_once "../../config/dbh.inc.php";
?>
  
</head>
<body>
  
<?php include '../partials/menu.php';?>
    <!-- <p>The select element is used to create a drop-down list.</p> -->
    
    <!-- <form action="/action_page.php"> -->
<!-- ///////////////////// -->
<div class="container">
<!-- action="apvalidate()" 
onsubmit="return apvalidate()"
-->
    
     <form onsubmit="return apvalidateForm()" action="" method="post">
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






      <!-- <br><br>
      <label for="apday" class="choose">Choose a day:</label>
      <select class="selectt" name="apday" id="apday" onchange="updateaptime()" required>
        <div class="optionn">
        <option value="">select day</option>
        <option value="sun">sunday</option>
        <option value="mon">monday</option>
        <option value="tues">tuesday</option>
        <option value="wends">wendsday</option>
        <option value="thurs">thursday</option>
        <option value="fri">friday</option>      
        <option value="satur">saturday</option>

      </div>
      </select>
      <br><br> -->
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
<select class="selectt" name="apday" id="apday">
    <option value="">Select day</option>
    <?php
    foreach ($rows as $row) {
        $day = $row['days'];
        echo "<option value=\"$day\">$day</option>";
    }
    ?>
</select>





      <br><br>
      <label for="aptime" class="choose">Choose time:</label>
      <select class="selectt" name="aptime" id="aptime" required>
        <option class="optionn" value="0">select time</option>
        
      </select>
      <br><br>
      <!-- <a href="Home.php"> -->
        <input type="submit" class="apbtn" id="apbtn" value="submit">
        <!-- <button class="apbtn" id="apbtn" type="submit"> Submit </button> -->
    <!-- </a> -->
      
    
  </form>
<!-- ////////////////////////// -->
<?php
// //display avaliable days and times from database in dropdown lists
// $query = 'SELECT days FROM availabletime';
// $result = $conn->query($query);

// if ($result->num_rows > 0) {
//     // Fetch rows and store them in an array
//     $rows = $result->fetch_all(MYSQLI_ASSOC);
// } else {
//     echo 'No data found.';
// }
// /////////////
// // <label for="apday" class="choose">Choose a day:</label>
// //       <select class="selectt" name="apday" id="apday" onchange="updateaptime()" required>
// echo'<label for="apday" class="choose">Choose a day:</label>';
// echo '<select class="selectt" name="apday" id="apday">';
// foreach ($rows as $row) {
//     $dayss = $row['days'];
//     //$name = $row['name'];

//     // Output option element
//     echo "<option value=\"$dayss\">$dayss</option>";
// }
// echo '</select>';

///////////////elform el3adiya
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



<!-- ////////////////////////// -->

</div>
 
   
</body>


</html>