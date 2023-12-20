<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport"
		content="width=device-width, 
				initial-scale=1.0">
	<title>ZOOTOPIA</title> 
	<link rel="stylesheet"
		href="../../public/css/admin-main.css">
	<link rel="stylesheet"
		href="../../public/css/admin-res.css">
        <script src="../../public/javascript/admin.js"></script>
        <link rel="stylesheet"
		href="../../public/css/pethotelas.css">
        <?php
  include_once "../../config/dbh.inc.php";
  session_start();

?>
</head>
<?php
$sql = "SELECT * FROM pets p
JOIN users u ON u.ID = p.owner_id
";

$result = $conn->query($sql);
?>
<body>

	<!-- for header part -->
	<header>

	<?php include '../partials/admin-header.php';?>


	</header>

	<div class="main-container">
		<div class="navcontainer">
        <?php include '../partials/admin-sidenav.php';?>

		</div>
		<div class="main">

			<div class="searchbar2">
				<input type="text"
					name=""
					id=""
					placeholder="Search">
				<div class="searchbtn">
				<img src="../../public/images/searchicon.png"
						class="icn srchicn"
						alt="search-button">
				</div>
                
			</div>		
			
            	<div class="report-container">
                <div class="report-header">
					<h1 class="recent-Articles">Pets</h1>
					<form method="post">
  <label for="petType">pet type</label>
  <select id="petType" name="petType" >

<?php 
	$sqlp = "SELECT DISTINCT pet_type FROM pet_breed p";
	$pet_types = $conn->query($sqlp);


        while ($row = $pet_types->fetch_assoc()) {
			$petType = $row['pet_type'];

			echo "<option value=\"$petType\">$petType</option>";
        }

?>
  </select>
  <button type="submit">Search Bookings</button>
</form>
					<button class="view">View All</button>
				</div>

			<?php
    if ($result->num_rows > 0) {
        // Output data of each row
        echo "<table>";
        echo "<tr><th>Owner Name</th><th>Pet Name</th><th>Pet Type</th><th>Pet Breed</th><th>Pet Birthdate</th><th>Pet Gender</th><th>Pet Picture</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
			echo "<td>" . $row['Fname'] .' ' .$row['Lname'] . "</td>";
            echo "<td>" . $row['pet_name'] . "</td>";
            echo "<td>" . $row['pet_type'] . "</td>";   
            echo "<td>" . $row['pet_breed'] . "</td>";
            echo "<td>" . $row['pet_birthdate'] . "</td>";
            echo "<td>" . $row['pet_gender'] . "</td>";
            echo "<td><img src='../../public/images/clients-pets/" . $row['pet_picture'] . "' alt='Pet Picture' style='max-width: 100px;'></td>";
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
