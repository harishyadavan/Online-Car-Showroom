<?php
session_start();
$usr = "";
$usrlog = "Login";
$loglink = "login.php";
$wel = "";
if (isset($_SESSION['userName'])) {
	$usr = $_SESSION['userName'];
	$usrlog = $_SESSION['usrlog'];
	$loglink = $_SESSION['loglink'];
	$wel = "Welcome ";
}
?>