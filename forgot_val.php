<?php
require 'connection.php';
$conn    = Connect();
session_start();

    $email=$conn->real_escape_string($_POST['email']); 
    $mob=$conn->real_escape_string($_POST['mob']); 
    $query = "SELECT * FROM login WHERE username='$email' and  mobile='$mob'";
    $res = $conn->query($query);
    if(mysqli_num_rows($res) >0)
    {
        while($a=mysqli_fetch_row($res))
		{
        		
				$_SESSION['usrPass'] = "Your Password is : ".$a[3];
				header("Location: forgot.php");
				   		
		}
    }
    else 
    {
		
        header("Location: forgot.php");
		$_SESSION['usrPass'] = "Data doesn't match";
		
    }

$conn->close();	
?>