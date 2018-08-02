<?php
require 'connection.php';
$conn    = Connect();
session_start();
$modl=$conn->real_escape_string($_POST['optone']); 
$vari=$conn->real_escape_string($_POST['varient']); 
$clr = $conn->real_escape_string($_POST['opttwo']);  

if (!empty($modl && $vari)) {
	
    
   $query = "SELECT * FROM price WHERE model='$modl' and  varient='$vari'";
    $res = $conn->query($query);
    if(mysqli_num_rows($res) >0)
    {
        while($da=mysqli_fetch_row($res))
		{
        		
				$_SESSION['bp'] = $da[2];
				$_SESSION['rt'] = $da[3];
				$_SESSION['insu'] = $da[4];
				$_SESSION['tl'] = $da[5];
				$_SESSION['md'] = $da[0];
				$_SESSION['vr'] = $da[1];
				$_SESSION['cr'] = $clr;
				header("Location: bookingprice.php");
				
        		
		}
    } 
} 
else 
    {
		
        echo "Sorry Something went wrong! go back and select all fields";
		
    }

$conn->close();	
?>