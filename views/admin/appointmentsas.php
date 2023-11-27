<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	
	<link rel="stylesheet" href="../../public/css/appointmentas.css">
   
        <script src="../../public/javascript/appointmentas.js"></script>

		<?php
  include_once "../../config/dbh.inc.php";
?>

</head>

<body>

	<!-- for header part -->
	<header>

	<?php include './templatefornewpage.php';?>


	</header>
	

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



//   // Perform the query
//   try {
// 	mysqli_query($conn, $sql);
// 	echo "appointment registered successfully :)";

// } catch (Exception $e) {
// 	echo "Error: " . $e->getMessage();
// } finally {
// 	mysqli_close($conn);
// }









?>




</body>
</html>
