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
					<div class="report-topic-heading">
					<h3 class="t-op">Owner Name</h3>
						<h3 class="t-op">Pet Name</h3>
						<h3 class="t-op">Pet type</h3>
						<h3 class="t-op">Pet Breed</h3>
						<h3 class="t-op">Owner Phone number</h3>
						<h3 class="t-op">Date from</h3>
						<h3 class="t-op">To</h3>
						<h3 class="t-op">price</h3>


					</div>

					<div class="items">
						<div class="item1">
<?php 
if ($result->num_rows > 0) {
						
						
    // output data of each row
    while ($row = $result->fetch_assoc()) {
		echo "<tr>";
        echo "<td>"  . $row["Fname"] . "</td>";
        // Add other fields accordingly
        echo "<td>" . $row["pet_name"] . "</td>";
        echo "<td>" .$row["pet_type"] . "</td>";
        echo "<td>" . $row["pet_breed"] . "</td>";
        echo "<td>" . $row["check_in_date"] . "</td>";
        echo "<td>" . $row["check_out_date"] . "</td>";
        echo "<td>" . $row["price"] . "</td>";
		echo "</tr>";    }
} else {
    echo "0 results";
}


// Close the connection
$conn->close();
?>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">Article 72</h3>
							<h3 class="t-op-nextlvl">1.5k</h3>
							<h3 class="t-op-nextlvl">360</h3>
							<h3 class="t-op-nextlvl label-tag">Published</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">Article 71</h3>
							<h3 class="t-op-nextlvl">1.1k</h3>
							<h3 class="t-op-nextlvl">150</h3>
							<h3 class="t-op-nextlvl label-tag">Published</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">Article 70</h3>
							<h3 class="t-op-nextlvl">1.2k</h3>
							<h3 class="t-op-nextlvl">420</h3>
							<h3 class="t-op-nextlvl label-tag">Published</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">Article 69</h3>
							<h3 class="t-op-nextlvl">2.6k</h3>
							<h3 class="t-op-nextlvl">190</h3>
							<h3 class="t-op-nextlvl label-tag">Published</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">Article 68</h3>
							<h3 class="t-op-nextlvl">1.9k</h3>
							<h3 class="t-op-nextlvl">390</h3>
							<h3 class="t-op-nextlvl label-tag">Published</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">Article 67</h3>
							<h3 class="t-op-nextlvl">1.2k</h3>
							<h3 class="t-op-nextlvl">580</h3>
							<h3 class="t-op-nextlvl label-tag">Published</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">Article 66</h3>
							<h3 class="t-op-nextlvl">3.6k</h3>
							<h3 class="t-op-nextlvl">160</h3>
							<h3 class="t-op-nextlvl label-tag">Published</h3>
						</div>

						<div class="item1">
							<h3 class="t-op-nextlvl">Article 65</h3>
							<h3 class="t-op-nextlvl">1.3k</h3>
							<h3 class="t-op-nextlvl">220</h3>
							<h3 class="t-op-nextlvl label-tag">Published</h3>
						</div>

					</div>
				</div>
			</div>


		</div>
	</div>

	<script src="./index.js"></script>
</body>
</html>
