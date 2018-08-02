<?php

require 'connection.php';
$conn    = Connect();
session_start();
$mdl    = $conn->real_escape_string($_POST['model']);
$clr   = $conn->real_escape_string($_POST['cclr']);
$varient = $conn->real_escape_string($_POST['cvarient']);
$basicpice = $conn->real_escape_string($_POST['bPrice']);
$roadtax    = $conn->real_escape_string($_POST['rTax']);
$insurence    = $conn->real_escape_string($_POST['insure']);
$totalprice    = $conn->real_escape_string($_POST['total']);
$email = $_SESSION['userEmail'];
$pa = "No";
$add = "";

$query = "SELECT * FROM booking WHERE uemail='$email'";
    $res = $conn->query($query);
    $rows = mysqli_num_rows($res);
    if ($rows==1) 
    {
		
		$_SESSION['bookMsg'] = "A car already exist with this email";
		header("Location: bookingprice.php");
		
	} 
	else
	{
		$query   = "INSERT into booking (model,color,varient,bPrice,rTax,ins,total,uemail,paid,address) VALUES('" . $mdl . "','" . $clr . "','" . $varient . "','" . $basicpice . "','" . $roadtax . "','" . $insurence . "','" . $totalprice . "','" . $email . "','" . $pa . "','" . $add . "')";
		$success = $conn->query($query);
		if (!$success)
		{
			$errsuc = "Some thing went wrong please try again";
			echo $errsuc;
		}
		else
		{
			header("Location: payment.php");
		}
	}
$conn->close();

?>