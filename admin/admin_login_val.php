<?php
require 'connection.php';
$conn    = Connect();
session_start();

    $userName=$conn->real_escape_string($_POST['username']); 
    $passWord=$conn->real_escape_string($_POST['password']); 
    $query = "SELECT * FROM adminlog WHERE username='$userName' and  password='$passWord'";
    $res = $conn->query($query);
    $rows = mysqli_num_rows($res);
    if ($rows==1) 
    {
        header("Location: dashboard.php");        
    }
    else 
    {
		$_SESSION['errLogMsg'] = "Invalid entry";
        header("Location: index.php");
    }

$conn->close();	
?>