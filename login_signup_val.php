<?php

require 'connection.php';
$conn    = Connect();
session_start();
$name    = $conn->real_escape_string($_POST['uname']);
$mobile   = $conn->real_escape_string($_POST['mobile']);
$email = $conn->real_escape_string($_POST['username']);
$password = $conn->real_escape_string($_POST['pword']);

$query = "SELECT * FROM login WHERE username='$email'";
    $res = $conn->query($query);
    $rows = mysqli_num_rows($res);
    if ($rows==1) 
    {
		$_SESSION['regMsg'] = "Email already exist";
		header("Location: login.php");
	} else
	{
		$query   = "INSERT into login (uname,mobile,username,pass) VALUES('" . $name . "','" . $mobile . "','" . $email . "','" . $password . "')";
		$success = $conn->query($query);

		if (!$success) 
		{
			$_SESSION['regMsg'] = "Wrong Entry";
			header("Location: login.php");
		} else {
			$_SESSION['regMsg'] = "Registered Sucessfuly";
			header("Location: login.php");
			$conn->close();
		}
	}

?>