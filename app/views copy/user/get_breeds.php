<?php
include_once "../../config/dbh.inc.php";

if (isset($_GET['petType'])) {
    $petType = $_GET['petType'];

    // Fetch breeds based on the selected pet type from the new 'pet_breed' table
    $sql = "SELECT DISTINCT breed_name FROM pet_breed WHERE pet_type = '$petType'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<option value='" . $row['breed_name'] . "'>" . $row['breed_name'] . "</option>";
        }
    } else {
        echo "<option value=''>No breeds found</option>";
    }
}
?>
