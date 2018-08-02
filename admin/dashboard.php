<?php include 'masterPage.html'; ?>
<html>
<head>
	<title>Dashboard</title>
	<link href="css/dashboard.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="content-one">
<?php
require 'connection.php'; 
$conn    = Connect();
$query="SELECT * FROM booking";
if ($result=mysqli_query($conn,$query))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  echo "Total Booking " .$rowcount;
  // Free result set
  mysqli_free_result($result);
  }
$conn->close();	
?>
</div>

<div class="content-two">
<?php
$conn    = Connect();
$query="SELECT * FROM service";
if ($result=mysqli_query($conn,$query))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  echo "Total Service " .$rowcount;
  // Free result set
  mysqli_free_result($result);
  }
$conn->close();	
?>
</div>

<div class="content-three">

</div>

</body>
</html>

