<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>book an appointment</title>
  <script src="javascript/appointment.js"></script>
  <link rel="stylesheet" href="css/appointment.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="css/menu.css?v=<?php echo time(); ?>">
  
  
</head>
<body>
  <?php include './includes/menu.php';?>
    <!-- <p>The select element is used to create a drop-down list.</p> -->
    
    <!-- <form action="/action_page.php"> -->
<!-- ///////////////////// -->
<div class="container">
  <!-- <form action="action_page.php"> -->
    
   
    <!-- <div class="row"> -->
      <!-- <div class="col-25"> -->
        <label for="pettype" class="choose">Pet type:</label>
      <!-- </div> -->
      <!-- <div class="col-75"> -->
        <select id="pettypeid" class="selectt" name="pettype" class="pettypee">
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
        </select>
      <!-- </div> -->
    <!-- </div> -->

    <!-- <div class="row">
      <div class="col-25"> -->
        <br><br>
        <label for="petname" class="choose">Pet Name:</label>
      <!-- </div> -->
      <!-- <div class="col-75"> -->
        <input type="text" id="petnameid" name="petname" placeholder="Your pet name ;) " class="petnamee">
      <!-- </div> -->
    <!-- </div> -->


<!-- //////////////////////// -->

      <br><br>
      <label for="apday" class="choose">Choose a day:</label>
      <select class="selectt" name="apday" id="apday" onchange="updateaptime()">
        <div class="optionn">
        <option value="0">select day</option>
        <option value="sun">sunday</option>
        <option value="mon">monday</option>
        <option value="tues">tuesday</option>
        <option value="wends">wendsday</option>
        <option value="thurs">thursday</option>
        <option value="fri">friday</option>      
        <option value="satur">saturday</option>

      </div>
      </select>
      <br><br>

      <label for="aptime" class="choose">Choose time:</label>
      <select class="selectt" name="aptime" id="aptime">
        <option class="optionn" value="0">select time</option>
        
      </select>
      <br><br>
      <a href="confirmappt.html">
        <button class="apbtn">submit the booking</button>
    </a>
      
       
  <!-- </form> -->
</div>
      <!-- <input type="submit" value="Submit"> -->
    <!-- </form> -->
    
    <!-- <p>Click the "Submit" button and the form-data will be sent to a page on the 
    server called "action_page.php".</p> -->
   
</body>















</html>