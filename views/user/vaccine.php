<?php

  require_once '../../config/dbh.inc.php';

  $sql = "SELECT * FROM vaccines";
  $all_vaccines = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>vaccination</title>
</head>
<body>
    

   <main>
       <?php
          while($row = mysqli_fetch_assoc($all_vaccines)){
       ?>
       <div class="card">
           <div class="image">
               <img src="<?php echo $row["vaccine_image"]; ?>" alt="">
           </div>
           <div class="caption">
               
               <p class="vaccine_name"><?php echo $row["vaccine_name"];  ?></p>
               <p class="price"><b>$<?php echo $row["price"]; ?></b></p>
               <p class="vaccine-description"><b><del>$<?php echo $row[" VaccineDescription"]; ?></del></b></p>
           </div>
           <button class="book" data-id="<?php echo $row["vaccine_id"];  ?>">book now</button>
       </div>
       <?php

          }
     ?>
   </main>
   
</body>
</html>
