<?php
session_start();
$usrPassword = "";
if (isset($_SESSION['usrPass'])) {
	$usrPassword = $_SESSION['usrPass'];
}

echo "\n"; 
echo "<!doctype html>\n"; 
echo "<html>\n"; 
echo "<head>\n"; 
echo "<meta charset=\"utf-8\">\n"; 
echo "	<title>Login and Sign up</title>\n"; 
echo "	<link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\">\n"; 
echo "	<link href=\"css/login.css\" rel=\"stylesheet\" type=\"text/css\">\n"; 
echo "</head>\n"; 
echo "<body>\n"; 
echo "<div class=\"log\" ><a href=\"login.php\">Login</a></div>\n"; 

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
echo "    <form action=\"forgot_val.php\" method=\"POST\" class=\"loginAlerts\">\n"; 
echo "    <fieldset>\n"; 
echo "    	<label for=\"alerts-username\">Registered E-mail or Username</label>\n"; 
echo "        <input name=\"email\" type=\"email\" autofocus required id=\"alerts-username\"/>\n"; 
echo "    </fieldset>\n"; 
echo "    <fieldset>\n"; 
echo "    	<label for=\"alerts-password\">Registered mobile number</label>\n"; 
echo "        <input name=\"mob\" type=\"text\" required id=\"alerts-password\" maxlength=\"10\" pattern=\"[0-9]{10}\"/> \n"; 
echo "    </fieldset>\n"; 
echo "    <fieldset>\n"; 
echo "    	<input type=\"submit\" name=\"submit\" value=\"Show Password\" />\n"; 
echo "    </fieldset>\n"; 
 
echo "    </form>\n"; 
echo " \n"; 
echo "</td>\n";  
echo "    </form>\n"; 
echo "    \n";
echo "<td>\n"; 
echo "   <fieldset id=\"shwPass\">\n"; 
echo "    	<label>$usrPassword</label>\n"; 
echo "        \n"; 
echo "    </fieldset>\n"; 
echo "</td>\n"; 
echo "</tr></table></div>\n"; 
echo "</body>\n"; 
echo "</html>\n"; 
echo "\n";
?>