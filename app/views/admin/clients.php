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
$sql = "SELECT * FROM users";

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
					<button class="view">View All</button>
				</div>

			<?php
    if ($result->num_rows > 0) {
        // Output data of each row
        echo "<table>";
        echo "<tr><th>Client Name</th><th>Email</th><th>Phone Number</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['Fname'] .' '.$row['Lname']. "</td>" ;
            echo "<td>" . $row['Email'] . "</td>";   
            echo "<td>" . $row['Phone'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";    
    } else {
        echo "No clients found.";
    }
    ?>



		</div>
        </div>
	</div>

	<script src="./index.js"></script>


	
</body>
</html>
