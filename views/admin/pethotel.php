<?php
  include_once "../../config/dbh.inc.php";
?>
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
		<link rel="stylesheet"
		href="../../public/css/pethotelas.css">
        <script src="../../public/javascript/admin.js"></script>

</head>
<?php 
$sql = "SELECT u.Fname, b.pet_name, b.pet_type, b.pet_breed, ph.check_in_date, ph.check_out_date, ph.price
        FROM users u
        JOIN bookings ph ON u.ID = ph.client_id
        JOIN pets b ON ph.animal_type = b.pet_type";  // Assuming animal_type is the column representing pet_type in the bookings table

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
			<div class="box-container">
			<div class="box box1">
					<div class="text">
					<h5 class="topic-heading">Tuesday 12 september 2023</h5>
						<h5 class="topic-heading">Pet bookings</h5>
						<h2 class="topic">12</h2>
					</div>
				</div>
				<div class="box box2">
					<div class="text">
						<h5 class="topic-heading">Hotel Capacity</h5>
						<h5 class="topic">50</h5>
					</div>

					
				</div>
			</div>
			<div class="report-container">
				<div class="report-header">
					<h1 class="recent-Articles">Hotel bookings</h1>
					<button class="view">View All</button>
				</div>

				<div class="report-body">
				
    <div class="items">
	<?php 
if ($result->num_rows > 0) {
  echo "<table>";
  echo "<tr>";
  echo "<th>Owner Name</th>";
  echo "<th>Pet Name</th>";
  echo "<th>Pet type</th>";
  echo "<th>Pet Breed</th>";
  echo "<th>Date from</th>";
  echo "<th>To</th>";
  echo "<th>Price</th>";
  echo "</tr>";

  // output data of each row
  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["Fname"] . "</td>";
    echo "<td>" . $row["pet_name"] . "</td>";
    echo "<td>" . $row["pet_type"] . "</td>";
    echo "<td>" . $row["pet_breed"] . "</td>";
    echo "<td>" . $row["check_in_date"] . "</td>";
    echo "<td>" . $row["check_out_date"] . "</td>";
    echo "<td>" . $row["price"] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "<p>No results found.</p>";
}
// Close the connection
$conn->close();
?>





						</div>

					</div>
				</div>
			</div>


		</div>
	</div>

	<script src="./index.js"></script>
</body>
</html>
