<?php
include_once "../../config/dbh.inc.php";
session_start();

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
