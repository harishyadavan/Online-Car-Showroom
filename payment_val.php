<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car_shoroom";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
session_start();
$aaa = $_SESSION['userEmail'];
$bbb = $_POST['address'];
$yes = "Yes";
$sql = "UPDATE booking SET paid='$yes', address='$bbb' WHERE uemail='$aaa'";

if (mysqli_query($conn, $sql)) {
	
	$querys = "SELECT * FROM booking WHERE uemail='$aaa'";
    $res = $conn->query($querys);
    $rows = mysqli_num_rows($res);
    if ($rows==1) 
    {
		$id=mysqli_fetch_row($res);
		$_SESSION['bid'] = $id[0];
		$_SESSION['add'] = $bbb;
	
		$_SESSION['done'] = "Your online payment as been successfully made. Your reciept number is";
		
		header("Location: payment_done.php");
	}
} else {
	$_SESSION['done'] = "Payment unsuccessfull. Please Retry";
     header("Location: payment_done.php");
}

mysqli_close($conn);
?>