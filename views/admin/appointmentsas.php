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
        <script src="../../public/javascript/admin.js"></script>
        <script src="../../public/javascript/appointmentas.js"></script>

		<?php
  include_once "../../config/dbh.inc.php";
?>

</head>

<body>

	<!-- for header part -->
	<header>

	<?php include '../partials/admin-header.php';?>


	</header>

	<div class="main-container">
		<div class="navcontainer">
        <?php include '../partials/admin-sidenav.php';?>

		</div>s
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
			



		</div>
	</div>

	<script src="./index.js"></script>

<?php 

$sql = "SELECT * FROM appointments";


echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">pettype</font> </td> 
          <td> <font face="Arial">petname</font> </td> 
          <td> <font face="Arial">appointmentday</font> </td> 
          <td> <font face="Arial">appointmenttime</font> </td> 
      
      </tr>';

if ($result = $mysqli->query($sql)) {

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
}



  // Perform the query
  try {
	mysqli_query($conn, $sql);
	echo "appointment registered successfully :)";

} catch (Exception $e) {
	echo "Error: " . $e->getMessage();
} finally {
	mysqli_close($conn);
}









?>




</body>
</html>
