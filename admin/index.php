<?php
$errLogAlert = "";
session_start();
if (isset($_SESSION['errLogMsg'])) {
	$errLogAlert = $_SESSION['errLogMsg'];
}
?>
<!doctype html>
<html>
<head>
	<title>Admin Login</title>
	<link href="css/login.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="divLogin">
<table><tr><td>
	<h3 class="alerts">Login</h3>
    <form action="admin_login_val.php" method="POST" class="loginAlerts">
    <fieldset>
    	<label for="alerts-username">Username:</label>
        <input name="username" type="email" autofocus required id="alerts-username"/>
    </fieldset>
    <fieldset>
    	<label for="alerts-password">Password:</label>
        <input name="password" type="password" required id="alerts-password"/> 
    </fieldset>
    <fieldset>
    	<input type="submit" name="submit" value="Let me in" />
    </fieldset>
	<fieldset>
    	<?php echo $errLogAlert; ?>
    </fieldset>
    </form>
 
</td>   
</tr></table></div>


</body>
</html>