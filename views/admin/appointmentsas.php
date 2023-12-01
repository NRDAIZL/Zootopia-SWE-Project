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
		href="../../public/css/appointmentas.css">
   
        <script src="../../public/javascript/appointmentas.js"></script>
		<link rel="stylesheet"
		href="../../public/css/pethotelas.css">


		<?php
  include_once "../../config/dbh.inc.php";
?>

</head>
<?php
$sql = "SELECT * FROM appointments";

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
					<h1 class="recent-Articles">Appointments</h1>
					<button class="view">View All</button>
				</div>
				<div class="report-body">
				<div class="items">

<?php 


echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <th> <font face="Arial">Pet type  </font> </th> 
          <th> <font face="Arial">Pet name  </font> </th> 
          <th> <font face="Arial">Appointment day  </font> </th> 
          <th> <font face="Arial">Appointment time  </font> </th> 
      
      </tr>';


	  
//if ($result = $mysqli->query($sql)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["pettype"];
        $field2name = $row["petname"];
        $field3name = $row["appointmentday"];
        $field4name = $row["appointmenttime"];


		echo '<tr> 
		<td>'.$field1name.'</td> 
		<td>'.$field2name.'</td> 
		<td>'.$field3name.'</td> 
		<td>'.$field4name.'</td> 
	
	</tr>';
        
    }

    /* free result set */
    $result->free();
//}



//   // Perform the query
  try {
	mysqli_query($conn, $sql);
	

} catch (Exception $e) {
	echo "Error: " . $e->getMessage();
} finally {
	mysqli_close($conn);
}
?>
				</div>
				</div>



		</div>
	</div>

	<script src="./index.js"></script>



</body>
</html>
