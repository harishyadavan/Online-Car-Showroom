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
echo "\n"; 
echo "<!doctype html>\n"; 
echo "<html>\n"; 
echo "<head>\n"; 
echo "<meta charset=\"utf-8\">\n"; 
echo "<title>Online Car Showroom</title>\n"; 
echo "<link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\">\n"; 
echo "<link href=\"css/slider.css\" rel=\"stylesheet\" type=\"text/css\">\n"; 
echo "<script src=\"js/imageSlider.js\"></script>\n"; 
echo "\n"; 
echo "</head>\n"; 
echo "<body>\n"; 
echo "<!-- Master Page Contents Starts -->\n"; 
echo "<div class=\"log\" ><a href=\"$loglink\">$usrlog</a></div>\n"; 
echo "<div class=\"log\"><label>$wel $usr</label></div>";
echo "<div class=\"head\" ><img src=\"images/logo.png\" width=\"500\" height=\"110\" alt=\"\"/></div>\n"; 
echo "<hr class=\"hline\" color=\"#000000\" />\n"; 
echo "\n"; 
echo "<div>\n"; 
echo "	<ul class=\"mainNav\">\n"; 
echo "    <li><a class=\"active\" href=\"index.php\">Home</a></li>\n"; 
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
echo "<!-- Master Page Contents Ends -->\n";
echo "</body>\n"; 
echo "</html>\n"; 
echo "\n";
?>