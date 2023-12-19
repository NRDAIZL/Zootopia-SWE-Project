<?php

require_once '../../config/dbh.inc.php';

if(isset($_POST["submit"])){
  $vaccinename = $_POST["vaccinename"];
  $price = $_POST["price"];
  $vaccine_description = $_POST["vaccine-description"];

  //For uploads photos
  $upload_dir = "uploads/"; //this is where the uploaded photo stored
  $vaccine_image = $upload_dir.$_FILES["imageUpload"]["name"];
  $upload_dir.$_FILES["imageUpload"]["name"];
  $upload_file = $upload_dir.basename($_FILES["imageUpload"]["name"]);
  $imageType = strtolower(pathinfo($upload_file,PATHINFO_EXTENSION)); //used to detected the image format
  $check = $_FILES["imageUpload"]["size"]; // to detect the size of the image
  $upload_ok = 0;

  if(file_exists($upload_file)){
      echo "<script>alert('The file already exist')</script>";
      $upload_ok = 0;
  }else{
      $upload_ok = 1;
      if($check !== false){
        $upload_ok = 1;
        if($imageType == 'jpg' || $imageType == 'png' || $imageType == 'jpeg' || $imageType == 'gif'){
            $upload_ok = 1;
        }else{
            echo '<script>alert("please change the image format")</script>';
        }
      }else{
          echo '<script>alert("The photo size is 0 please change the photo ")</script>';
          $upload_ok = 0;
      }
  }

  if($upload_ok == 0){
     echo '<script>alert("sorry your file is doesn\'t uploaded. Please try again")</script>';
  }else{
      if($vaccinename != "" && $price !=""&&$vaccine_description!=""){
          move_uploaded_file($_FILES["imageUpload"]["tmp_name"],$upload_file);

          $sql = "INSERT INTO vaccines(vaccine_name,price,VaccineDescription,vaccine_image)
          VALUES('$vaccinename',$price,$vaccine_description,'$vaccine_image')";
            

          if($conn->query($sql) === TRUE){
              echo "<script>alert('your vaccine uploaded successfully')</script>";
              
          }
          else { try {
            mysqli_query($conn, $sql);
            echo "Vaccine successfully added to the database.";
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        } finally {
            mysqli_close($conn);
        }}
      }
  }


  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../public/css/upload.css">
   

</head>
<body>
<header>

	


	</header>

     
    <section id="upload_container">
        <form action="uploadvac.php" method="POST" enctype="multipart/form-data" >
            <input type="text" name="vaccinename" id="VaccineName" placeholder="vaccine Name" required>
            <input type="number" name="price" id="price" placeholder="vaccine Price" required>
            <input type="text" name="vaccine-description" id="vaccine_description" placeholder="vaccine description">
            <input type="file" name="imageUpload" id="imageUpload" required hidden>
            <button id="choose" onclick="upload();">Choose Image</button>
            <input type="submit" value="Upload" name="submit">
        </form>
    </section>

    <script>
        var vaccinename = document.getElementById("VaccineName");
        var price = document.getElementById("price");
        var vaccine_description = document.getElementById("vaccine_description");
        var choose = document.getElementById("choose");
        var uploadImage = document.getElementById("imageUpload");

        function upload(){
            uploadImage.click();
        }

        uploadImage.addEventListener("change",function(){
            var file = this.files[0];
            if(vaccinename.value == ""){
                vaccinename.value = file.name;
            }
            choose.innerHTML = "You can change("+file.name+") picture";
        })
    </script>
</body>
</html>
