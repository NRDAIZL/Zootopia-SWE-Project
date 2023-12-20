<?php
  include_once "../../config/dbh.inc.php";
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add New Pet</title>
  <style>
    body {
      font-family: sans-serif;
      margin: 0;
      padding: 0;
    }

    form {
      display: flex;
      flex-direction: column;
      width: 500px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input, textarea {
      width: 100%;
      padding: 5px;
      border: 1px solid #ccc;
    }

    .btn {
      background-color: #dc2020;
      color: white;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
    }

    .btn:hover {
      background-color: #dc2827;
    }
  </style>
   <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            // Function to load pet breeds based on selected pet type
            function loadBreeds() {
                var petType = $("#petType").val();

                // Make an AJAX request to fetch breeds based on the selected type
                $.ajax({
                    type: "GET",
                    url: "get_breeds.php", // Create a separate PHP file to handle this AJAX request
                    data: { petType: petType },
                    success: function (data) {
                        // Update the breed dropdown with fetched data
                        $("#petBreed").html(data);
                    }
                });
            }

            // Attach the loadBreeds function to the change event of petType dropdown
            $("#petType").change(function () {
                loadBreeds();
            });

            // Load initial breeds on page load
            loadBreeds();
        });
    </script>
</head>
<body>
  <h1>Add New Pet</h1>
  <form action="" method="post" enctype="multipart/form-data">
    <label for="petName">Pet Name:</label>
    <input type="text" id="petName" name="petName" required>

    <label for="petType">Pet Type:</label>
    <select id="petType" name="petType" required>
    <option value="Dog">Dog</option>
   <option value="Cat">Cat</option>
   <option value="Rabbit">Rabbit</option>
   <option value="Hamster">Hamster</option>
   <option value="Bird">Bird</option>
   <option value="Fish">Fish</option>
   <option value="Reptile">Reptile</option>
   <option value="Other">Other</option>
    </select>

    <label for="petBreed">Pet Breed:</label>
    <select id="petBreed" name="petBreed" required></select>

    <label for="petBirthdate">Pet Birthdate:</label>
<input type="date" id="petBirthdate" name="petBirthdate" required>


    <label for="petGender">Pet Gender:</label>
    <select id="petGender" name="petGender" required>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>

    <label for="petPicture">Pet Picture:</label>
    <input type="file" id="petPicture" name="petPicture">

    <button class="btn" type="submit">Add Pet</button>
  </form>
</body>
</html>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$petName = $_POST['petName'];
$petType = $_POST['petType'];
$petBreed = $_POST['petBreed'];
$petBirthdate = $_POST['petBirthdate'];
$petGender = $_POST['petGender'];

// Check if a file was uploaded
if(isset($_FILES['petPicture'])){
    $file_name = $_FILES['petPicture']['name'];
    $file_tmp =$_FILES['petPicture']['tmp_name'];

    // Move the uploaded file to a specific directory
    move_uploaded_file($file_tmp,"../../public/images/clients-pets/".$file_name);
    $petPicture = $file_name;
} else {
    $petPicture = null;
}
$sql = "INSERT INTO pets (owner_id, pet_name, pet_type, pet_breed, pet_birthdate, pet_gender, pet_picture)
 VALUES ('" . $_SESSION['ID'] . "', '$petName', '$petType', '$petBreed', '$petBirthdate', '$petGender', '$petPicture')";
 try {
        mysqli_query($conn, $sql);
        echo "Pet successfully added to the database.";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    } finally {
        mysqli_close($conn);
    }

}
?>