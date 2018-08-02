<?php

require 'connection.php';
session_start();
$conn    = Connect();
$name    = $conn->real_escape_string($_POST['cname']);
$email   = $conn->real_escape_string($_POST['cemail']);
$message = $conn->real_escape_string($_POST['message']);
$query   = "INSERT into contact (cname,email,message) VALUES('" . $name . "','" . $email . "','" . $message . "')";
$success = $conn->query($query);
if (!$success) {
	$_SESSION['conMsg'] = "Something went wrong! Please try again";
	//header("Location: contact.php");
	echo "unsuc";
}
	$_SESSION['conMsg'] = "Message sent successfully";
	header("Location: contact.php");
	//echo ($_SESSION["conMsg"]);

	
$conn->close();

?>