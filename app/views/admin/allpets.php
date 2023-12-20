<!DOCTYPE html>
<html lang="en">
<?php
  include_once "../../config/dbh.inc.php";

include_once "../../models/PetModel.php"; 
$petModel = new PetModel($conn);
// Check if a pet type is selected
if (isset($_POST['petType'])) {
    $selectedPetType = $_POST['petType'];

    // Perform the search using the selected pet type
    $result = $petModel->searchPets($selectedPetType);
} else {
    // If no pet type is selected, show all pets
    $result = $petModel->getAllPets();
}
$pet_types= $petModel->getDistinctPetTypes();
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZOOTOPIA</title>
    <link rel="stylesheet" href="../../../public/css/admin-main.css">
    <link rel="stylesheet" href="../../../public/css/admin-res.css">
    <link rel="stylesheet" href="../../../public/css/pethotelas.css">
</head>

<body>

    <header>
        <?php include '../partials/admin-header.php';
         ?>
    </header>

    <div class="main-container">
        <div class="navcontainer">
            <?php include '../partials/admin-sidenav.php'; ?>
        </div>

        <div class="main">

            <div class="searchbar2">
                <form method="post">
                    <input type="text" name="" id="" placeholder="Search">
                    <div class="searchbtn">
                        <img src="../../../public/images/searchicon.png" class="icn srchicn" alt="search-button">
                    </div>
                </form>
            </div>

            <div class="report-container">
                <div class="report-header">
                    <h1 class="recent-Articles">Pets</h1>
                    <form method="post">
    <label for="petType">Pet Type</label>
    <select id="petType" name="petType">
        <?php
        if (!empty($pet_types)) {
            foreach ($pet_types as $petType) {
                $selected = ($selectedPetType == $petType) ? 'selected' : '';
                echo "<option value=\"$petType\" $selected>$petType</option>";
            }
        }
        ?>
    </select>
    <button type="submit">Search Pets</button>
</form>


    <button class="view">View All</button>
                </div>

                <?php
if (isset($result) && $result->num_rows > 0) {
    echo "<table>";
                    echo "<tr><th>Owner Name</th><th>Pet Name</th><th>Pet Type</th><th>Pet Breed</th><th>Pet Birthdate</th><th>Pet Gender</th><th>Pet Picture</th></tr>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['Fname'] . ' ' . $row['Lname'] . "</td>";
                        echo "<td>" . $row['pet_name'] . "</td>";
                        echo "<td>" . $row['pet_type'] . "</td>";
                        echo "<td>" . $row['pet_breed'] . "</td>";
                        echo "<td>" . $row['pet_birthdate'] . "</td>";
                        echo "<td>" . $row['pet_gender'] . "</td>";
                        echo "<td><img src='../../../public/images/clients-pets/" . $row['pet_picture'] . "' alt='Pet Picture' style='max-width: 100px;'></td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "No pets found.";
                }
                ?>

            </div>
        </div>
    </div>

    <script src="./index.js"></script>

</body>

</html>
