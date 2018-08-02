<?php
session_start();
$usr = "";
$usrlog = "Login";
$loglink = "login.php";
$wel = "";
$bp = "";
$book ="";
if (isset($_SESSION['userName'])) {
	$usr = $_SESSION['userName'];
	$usrlog = $_SESSION['usrlog'];
	$loglink = $_SESSION['loglink'];
	$wel = "Welcome ";
} else {
	header("Location: Login.php");
}
if (isset($_SESSION['bp'])) {
	$bp = $_SESSION['bp'];
	$rt = $_SESSION['rt'];
	$in = $_SESSION['insu'];
	$totl = $_SESSION['tl'];
	$md = $_SESSION['md'];
	$cr = $_SESSION['cr'];
	$vr = $_SESSION['vr'];
}
if (!empty($_SESSION['bookMsg'])) {
	$book = $_SESSION['bookMsg'];
}

echo "\n"; 
echo "<!doctype html>\n"; 
echo "<hmtl>\n"; 
echo "<head>\n"; 
echo "<meta charset=\"utf-8\">\n"; 
echo "<title>Booking</title>\n"; 
echo "<link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\">\n"; 
echo "<link href=\"css/form.css\" rel=\"stylesheet\" type=\"text/css\">\n";
echo "<script src=\"js/data.js\"></script>\n"; 
echo "<link href=\"css/booking.css\" rel=\"stylesheet\" type=\"text/css\">\n"; 
echo "\n"; 
echo "\n"; 

echo "\n"; 
echo "\n"; 
echo "</head>\n"; 
echo "\n"; 
echo "<body>\n"; 
echo "<div class=\"log\" ><a href=\"$loglink\">$usrlog</a></div>\n";  
echo "<div class=\"log\"><label>$wel $usr</label></div>";
echo "<div class=\"head\" ><img src=\"images/logo.png\" width=\"500\" height=\"110\" alt=\"\"/></div>\n"; 
echo "<hr class=\"hline\" color=\"#000000\" />\n"; 
echo "\n"; 
echo "<div>\n"; 
echo "	<ul class=\"mainNav\">\n"; 
echo "    <li><a  href=\"index.php\">Home</a></li>\n"; 
echo "    <li class=\"drop\"><a href=\"models_hatch.php\">Models</a>\n"; 
echo "    	<ul class=\"SubMenu\">\n"; 
echo "        	<li><a href=\"models_hatch.php\">Hatchback</a></li>\n"; 
echo "           <li><a href=\"models_suv.php\">SUV</a></li>   \n"; 
echo "        </ul>\n"; 
echo "    </li>\n"; 
echo "    <li><a class=\"active\" href=\"booking.php\">Booking</a></li>\n"; 
echo "    <li><a href=\"service.php\">Service</a></li>\n"; 
echo "    <li><a href=\"about.php\">About</a></li>\n"; 
echo "    <li><a href=\"contact.php\">Contact</a></li></ul>\n"; 
echo "</div>\n"; 
echo "<hr class=\"hline\" color=\"#000000\" />\n"; 
echo "<form name=\"myform\" action=\"booking_val.php\" method=\"POST\" >\n"; 
echo "<div class=\"form\">\n"; 
echo "<table>\n"; 

echo "    <tr><td>Model</td><td><input name=\"model\" type=\"text\" value=\"$md\" readonly required /></td></tr>\n"; 
echo "    <tr><td>Color</td><td><input name=\"cclr\" type=\"text\" value=\"$cr\" readonly required /></td></tr>\n"; 
echo "    <tr><td>Varient</td><td><input name=\"cvarient\" type=\"text\" value=\"$vr\" readonly required /></td></tr>\n"; 
 
echo "    <tr><td>Basic Price</td><td><input id=\"bPrice\" name=\"bPrice\" type=\"text\" value=\"$bp\" readonly required /></td></tr>\n"; 
echo "    <tr><td>Road Tax</td><td><input id=\"rTax\" name=\"rTax\" type=\"text\" value=\"$rt\" readonly required /></td></tr>\n"; 
echo "    <tr><td>Insurence</td><td><input id=\"insu\" name=\"insure\" type=\"text\" value=\"$in\" readonly required /></td></tr>\n"; 
echo "    <tr><td>Total</td><td><input id=\"totl\" name=\"total\" type=\"text\" value=\"$totl\" readonly required /></td></tr>\n"; 
echo "    <tr><td><input type=\"submit\" value=\"Pay Now\"/></td></tr>\n"; 
echo "    \n"; 
echo $book;
echo "    \n"; 
echo "    \n"; 
echo "</table>\n"; 
echo "</div>\n"; 
echo "</form>\n"; 
echo "\n"; 
echo "<div class=\"carArrange\">\n"; 
echo "<img src=\"images/car.jpg\" alt=\"car\" />\n"; 
echo "</div>\n";
echo "\n"; 
echo "</body>\n"; 
echo "</html>\n"; 
echo "\n";
?>