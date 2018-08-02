<?php include 'masterPage.html'; ?>
<html>
<head>
	<title>Service</title>
	<meta http-equiv='refresh' content='2;url='service.php'>
	<link href="css/table.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php 
require 'connection.php'; 
$conn    = Connect();
$query = "SELECT * FROM service";
$res = $conn->query($query);

// output data of each row
if ($res->num_rows > 0) 
{
	echo "<table><tr><th>Email</th><th>Car</th><th>Car Number</th><th>Center</th><th>Service Type</th><th>App Date</th><th>App Time</th><th>Picup</th></tr>";
	while($row = $res->fetch_assoc())
	{
		echo "<tr><td>" .$row["email"]. "</td><td>" .$row["car"]. "</td><td>" .$row["carnum"]. "</td><td>" .$row["cen"]. "</td><td>" .$row["sertype"]. "</td><td>" .$row["appDate"]. "</td><td>" .$row["appTime"]. "</td><td>" .$row["picup"]. "</td></tr>";
	}
}
else {
	echo "NO DATA";
}
echo "</table>";	
$conn->close();	
?>

</body>
</html>

