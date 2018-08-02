<?php
require 'connection.php';
$conn    = Connect();
session_start();

    $userName=$conn->real_escape_string($_POST['username']); 
    $passWord=$conn->real_escape_string($_POST['password']); 
    $query = "SELECT * FROM login WHERE username='$userName' and  pass='$passWord'";
    $res = $conn->query($query);
    $rows = mysqli_num_rows($res);
    if ($rows==1) 
    {
		$b=mysqli_fetch_row($res);
		$_SESSION['usrlog'] = "Logout";
		$_SESSION['userName'] = $b[0];
		$_SESSION['userEmail'] = $userName;
        header("Location: index.php");
		$_SESSION['loglink'] = "logout.php";
        
    }
    else 
    {
		$_SESSION['regMsg'] = "Invalid entry";
        header("Location: login.php");
    }

$conn->close();	
?>