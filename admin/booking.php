<?php include 'masterPage.html'; ?>
<html>
<head>
	<title>Booking</title>
	<meta http-equiv='refresh' content='2;url='service.php'>
	<link href="css/table.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="table-align">
<?php 
require 'connection.php'; 
$conn    = Connect();
$query = "SELECT * FROM booking";
$res = $conn->query($query);

// output data of each row
if ($res->num_rows > 0) 
{
	echo "<table><tr><th>ID</th><th>Email</th><th>Model</th><th>Varient</th><th>Color</th><th>Basic</th><th>Road Tax</th><th>Insurence</th><th>Total</th><th>Address</th><th>Paid</th></tr>";
	while($row = $res->fetch_assoc())
	{
		echo "<tr><td>" .$row["ID"]. "</td><td>" .$row["uemail"]. "</td><td>" .$row["model"]. "</td><td>" .$row["varient"]. "</td><td>" .$row["color"]. "</td><td>" .$row["bPrice"]. "</td><td>" .$row["rTax"]. "</td><td>" .$row["ins"]. "</td><td>" .$row["total"]. "</td><td>" .$row["address"]. "</td><td>" .$row["paid"]. "</td></tr>";
	}
}
else {
	echo "NO DATA";
}
echo "</table>";	
$conn->close();	
?>
</div>


</body>
</html>

