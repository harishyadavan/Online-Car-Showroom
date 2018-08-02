<?php include 'masterPage.html'; ?>
<head>
	<title>Message</title>
	<meta http-equiv='refresh' content='2;url='service.php'>
	<link href="css/table.css" rel="stylesheet" type="text/css">
</head>
<div class="table-align">
<?php 
require 'connection.php'; 
$conn    = Connect();
$query = "SELECT * FROM contact";
$res = $conn->query($query);

// output data of each row
if ($res->num_rows > 0) 
{
	echo "<table><tr><th>Name</th><th>Email</th><th>Message</th></tr>";
	while($row = $res->fetch_assoc())
	{
		echo "<tr><td>" .$row["cname"]. "</td><td>" .$row["email"]. "</td><td>" .$row["message"]. "</td></tr>";
	}
}
else {
	echo "NO DATA";
}
echo "</table>";	
$conn->close();	
?>
</div>


