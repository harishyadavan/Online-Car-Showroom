<?php
session_start();
$usr = "";
$usrlog = "Login";
$loglink = "login.php";
$wel = "";
$done ="";
if (isset($_SESSION['userName'])) {
	$usr = $_SESSION['userName'];
	$usrlog = $_SESSION['usrlog'];
	$loglink = $_SESSION['loglink'];
	$wel = "Welcome ";
}
if (isset($_SESSION['done'])) {
	$done = $_SESSION['done'];
	$recp = $_SESSION['bid'];
}

echo "\n"; 
echo "<!doctype html>\n"; 
echo "<html>\n"; 
echo "<head>\n"; 
echo "<meta charset=\"utf-8\">\n"; 
echo "	<title>Done</title>\n"; 
echo "	<link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\">\n"; 
echo "	<link href=\"css/login.css\" rel=\"stylesheet\" type=\"text/css\">\n"; 
echo "</head>\n"; 
echo "<body>\n"; 
echo "<div class=\"log\" ><a href=\"$loglink\">$usrlog</a></div>\n"; 
echo "<div class=\"log\"><label>$wel $usr</label></div>";
echo "\n"; 
echo "<div class=\"head\" ><img src=\"images/logo.png\" width=\"500\" height=\"110\" alt=\"\"/></div>\n"; 
echo "<hr class=\"hline\" color=\"#000000\" />\n"; 
echo "<div>\n"; 
echo "	<ul class=\"mainNav\">\n"; 
echo "    <li><a  href=\"index.php\">Home</a></li>\n"; 
echo "    <li class=\"drop\"><a href=\"models_hatch.php\">Models</a>\n"; 
echo "    	<ul class=\"SubMenu\">\n"; 
echo "        	<li><a href=\"models_hatch.php\">Hatchback</a></li>\n"; 
echo "           <li><a href=\"models_suv.php\">SUV</a></li>   \n"; 
echo "        </ul>\n"; 
echo "    </li>\n"; 
echo "    <li><a href=\"booking.php\">Booking</a></li>\n"; 
echo "    <li><a href=\"service.php\">Service</a></li>\n"; 
echo "    <li><a href=\"about.php\">About</a></li>\n"; 
echo "    <li><a href=\"contact.php\">Contact</a></li></ul>\n"; 
echo "</div>\n"; 
echo "<hr class=\"hline\" color=\"#000000\" />\n"; 
echo "\n"; 
echo "<div class=\"divLogin\">\n"; 
echo "<table><tr><td>\n"; 
echo "\n"; 
echo "	\n"; 
echo "    <form action=\"reciept.php\" method=\"POST\" class=\"loginAlerts\" target=\"_blank\">\n"; 
echo "    <fieldset>\n"; 
echo "    	<label for=\"alerts-username\">$done</label>\n";  
echo "  <center><label for=\"alerts-username\">$recp</label></center>\n";          
echo "    </fieldset>\n";
echo "<div id=\"mid\">\n";
echo "    <fieldset>\n"; 
echo "    	<input type=\"submit\" value=\"Print Receipt\" />\n"; 
echo "    </fieldset>\n";
echo "</div>\n";
echo "    </form>\n"; 
echo " \n"; 
echo "</td>\n";  
echo "    </form>\n"; 
echo "    \n";
echo "<td>\n"; 

echo "</td>\n"; 
echo "</tr></table></div>\n"; 
echo "</body>\n"; 
echo "</html>\n"; 
echo "\n";
?>