<?php
session_start();
$usr = "";
$usrlog = "Login";
$loglink = "login.php";
$wel = "";
$ue = "";
$errinfo = "";
if (isset($_SESSION['userName'])) {
	$usr = $_SESSION['userName'];
	$usrlog = $_SESSION['usrlog'];
	$loglink = $_SESSION['loglink'];
	$wel = "Welcome ";
	$ue = $_SESSION['userEmail'];
}
if (isset($_SESSION['conMsg'])) {
	$errinfo = $_SESSION['conMsg'];
}
echo "\n"; 
echo "<!doctype html>\n"; 
echo "<html>\n"; 
echo "<head>\n"; 
echo "<meta charset=\"utf-8\">\n"; 
echo "	<title>Contact Us</title>\n"; 
echo "	<link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\">\n"; 
echo "	<link href=\"css/googleMap.css\" rel=\"stylesheet\" type=\"text/css\">\n"; 
echo "    <link href=\"css/form.css\" rel=\"stylesheet\" type=\"text/css\">\n"; 
echo "</head>\n"; 
echo "\n"; 
echo "<body>\n"; 
echo "<div class=\"log\" ><a href=\"$loglink\">$usrlog</a></div>\n"; 
echo "<div class=\"log\"><label>$wel $usr</label></div>";
echo "<div class=\"head\" ><img src=\"images/logo.png\" width=\"500\" height=\"110\" alt=\"\"/></div>\n"; 
echo "\n"; 
echo "<hr class=\"hline\" color=\"#000000\" />\n"; 
echo "\n"; 
echo "<div>\n"; 
echo "	<ul class=\"mainNav\">\n"; 
echo "    <li><a href=\"index.php\">Home</a></li>\n"; 
echo "    <li class=\"drop\"><a href=\"models_hatch.php\">Models</a>\n"; 
echo "    	<ul class=\"SubMenu\">\n"; 
echo "        	<li><a href=\"models_hatch.php\">Hatchback</a></li>\n"; 
echo "           <li><a href=\"models_suv.php\">SUV</a></li>   \n"; 
echo "        </ul>\n"; 
echo "    </li>\n"; 
echo "    <li><a href=\"booking.php\">Booking</a></li>\n"; 
echo "    <li><a href=\"service.php\">Service</a></li>\n"; 
echo "    <li><a href=\"about.php\">About</a></li>\n"; 
echo "    <li><a class=\"active\" href=\"contact.php\">Contact</a></li></ul>\n"; 
echo "</div>\n"; 
echo "<hr class=\"hline\" color=\"#000000\" />\n"; 
echo "\n"; 
echo "<div class=\"form\" ><h3>Get in touch </h3>\n"; 
echo "<div id=\"contact-form\">\n"; 
echo "	<form method=\"POST\" action=\"contact_val.php\">	\n"; 
echo "    	<input name=\"cname\" type=\"text\" value=\"$usr\" required placeholder=\"Your Name\" /><br/>\n"; 
echo "        <input name=\"cemail\" type=\"email\" value=\"$ue\" required placeholder=\"Email ID\" /><br/>\n"; 
echo "        <textarea name=\"message\"  rows=\"5\" maxlength=\"160\" required placeholder=\"Your Messege\" ></textarea><br/>\n"; 
echo "        <input type=\"submit\" name=\"submit\" value=\"Send Messege\" height=\"30\" /><br/>\n"; 
echo "    \n"; 
echo $errinfo;
echo "	</form>\n"; 
echo "\n"; 
echo "</div>\n"; 
echo "<div id=\"map\">\n"; 
echo "<script>\n"; 
echo "      function initMap() {\n"; 
echo "        var mapDiv = document.getElementById('map');\n"; 
echo "        var map = new google.maps.Map(mapDiv, {\n"; 
echo "          center: {lat: 13.08431, lng: 77.48399},\n"; 
echo "          zoom: 17\n"; 
echo "        });\n"; 
echo "      }\n"; 
echo "    </script>\n"; 
echo "    <script src=\"https://maps.googleapis.com/maps/api/js?callback=initMap\"\n"; 
echo "        async defer></script>\n"; 
echo " </div>\n"; 
echo " </div>\n"; 
echo "</body>\n"; 
echo "</html>\n"; 
?>