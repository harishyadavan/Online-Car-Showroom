<?php

require 'connection.php';
$conn    = Connect();
session_start();

$cent = $conn->real_escape_string($_POST['serCent']);
$type = $conn->real_escape_string($_POST['serType']);
$car = $conn->real_escape_string($_POST['carType']);
$picup = $conn->real_escape_string($_POST['picup']);
$serdate = $conn->real_escape_string($_POST['date']);
$sertime = $conn->real_escape_string($_POST['time']);
$num = $conn->real_escape_string($_POST['carnu']);
$uemail = $_SESSION['userEmail'];
$query = "INSERT into service (cen,sertype,car,picup,appDate,appTime,email,carnum) VALUES('" . $cent . "','" . $type . "','" . $car . "','" . $picup . "','" . $serdate . "','" . $sertime . "','" . $uemail . "','" . $num . "')";
$success = $conn->query($query);

if (!$success) {
	$_SESSION['serMsg'] = "Wrong Entry";
	header("Location: service.php");
}
else
{
	
	$_SESSION['serMsg'] = "Great you got an appointment";
	header("Location: service.php");
}
$conn->close();

?>