<?php
session_start();
$usr = "";
$usrlog = "Login";
$loglink = "login.php";
$wel = "";
$su = "";
if (isset($_SESSION['userName'])) {
	$usr = $_SESSION['userName'];
	$usrlog = $_SESSION['usrlog'];
	$loglink = $_SESSION['loglink'];
	$wel = "Welcome ";
} else {
	header("Location: Login.php");
}

if (isset($_SESSION['serMsg'])) {
	$su = $_SESSION['serMsg'];
}
echo "\n"; 
echo "<!doctype html>\n"; 
echo "<html>\n"; 
echo "<head>\n"; 
echo "<meta charset=\"utf-8\">\n"; 
echo "<title>Service</title>\n"; 
echo "<link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\">\n"; 
echo "<link href=\"css/form.css\" rel=\"stylesheet\" type=\"text/css\">\n"; 
echo "<link href=\"css/booking.css\" rel=\"stylesheet\" type=\"text/css\">\n"; 

echo "<link href=\"css/jquery-ui.css\" rel=\"Stylesheet\"\n"; 
echo "        type=\"text/css\" />\n"; 
echo "    <script type=\"text/javascript\" src=\"js/jquery-1.7.2.min.js\"></script>\n"; 
echo "    <script type=\"text/javascript\" src=\"js/jquery-ui.js\"></script>\n"; 
echo "    <script language=\"javascript\">\n"; 
echo "        $(document).ready(function () {\n"; 
echo "            $(\"#txtdate\").datepicker({\n"; 
echo "                minDate: 0\n"; 
echo "            });\n"; 
echo "        });\n"; 
echo "    </script>\n";

echo "</head>\n"; 
echo "\n"; 
echo "<body>\n"; 
echo "\n"; 
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
echo "    <li><a href=\"booking.php\">Booking</a></li>\n"; 
echo "    <li><a class=\"active\" href=\"service.php\">Service</a></li>\n"; 
echo "    <li><a href=\"about.php\">About</a></li>\n"; 
echo "    <li><a href=\"contact.php\">Contact</a></li></ul>\n"; 
echo "</div>\n"; 
echo "<hr class=\"hline\" color=\"#000000\" />\n"; 
echo "\n"; 
echo "<div class=\"form\" id=\"service-form\"><form method=\"POST\" action=\"service_val.php\">\n"; 
echo "	<table>\n"; 
echo "    	<tr><td>Service Center</td><td><select name=\"serCent\" autofocus required>\n"; 
echo "    	  <option value=\"Adugodi\">Adugodi</option>\n"; 
echo "    	  <option value=\"Basavangudi\">Basavangudi</option>\n"; 
echo "    	  <option value=\"Domlur\">Domlur</option>\n"; 
echo "    	  <option value=\"Hebbal\">Hebbal</option>\n"; 
echo "    	  <option value=\"Jayanagar\">Jayanagar</option>\n"; 
echo "    	  <option value=\"Malleshwaram\">Malleshwaram</option>\n"; 
echo "    	  <option value=\"Peenya\">Peenya</option>\n"; 
echo "    	  <option value=\"Rajajinagar\">Rajajinagar</option>\n"; 
echo "    	  <option value=\"Srinagar\">Srinagar</option>\n"; 
echo "    	  <option value=\"Yeshwanthpur\">Yeshwanthpur</option>\n"; 
echo "      </select></td></tr>\n"; 
echo "    	<tr><td>Type of Service</td><td><select name=\"serType\" autofocus required>\n"; 
echo "    	  <option value=\"1\">1st Free Service</option>\n"; 
echo "    	  <option value=\"2\">2nd Free Service</option>\n"; 
echo "    	  <option value=\"3\">3rd Free Service</option>\n"; 
echo "    	  <option value=\"4\">4th Paid Service</option>\n"; 
echo "    	  <option value=\"5\">5th Paid Service</option>\n"; 
echo "    	  <option value=\"6\">6th Paid Service</option>\n"; 
echo "    	  <option value=\"7\">7th Paid Service</option>\n"; 
echo "    	  <option value=\"8\">8th Paid Service</option>\n"; 
echo "    	  <option value=\"9\">9th Paid Service</option>\n"; 
echo "    	  <option value=\"10\">10th Paid Service</option>\n"; 
echo "      </select></td></tr>\n"; 
echo "    	<tr><td>Car Varient</td><td><select name=\"carType\" autofocus required>\n"; 
echo "    	  <option value=\"Hatchback Petrol\">Hatchback Petrol</option>\n"; 
echo "    	  <option value=\"Hatchback Diesel\">Hatchback Diesel</option>\n"; 
echo "    	  <option value=\"SUV Petrol\">SUV Petrol</option>\n"; 
echo "    	  <option value=\"SUV Diesel\">SUV Diesel</option>\n"; 
echo "      </select></td></tr>\n";
echo "        <tr><td>Car Reg Number</td><td><input name=\"carnu\" type=\"text\" required maxlength=\"10\" onkeypress=\"return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122)|| (event.charCode >= 48 && event.charCode <= 57))\" /></td></tr>\n"; 
echo "      	<tr><td>Picup Required</td><td><input type=\"radio\" name=\"picup\" value=\"Yes\" checked />Yes\n"; 
echo "        <input type=\"radio\" name=\"picup\" value=\"No\" />No</td></tr>\n"; 
echo "        <tr><td>Appointment Date</td><td><input name=\"date\" type=\"text\" required id=\"txtdate\" /></td></tr>\n"; 
echo "        <tr><td>Appointment Time</td><td><input name=\"time\" type=\"time\" required /></td></tr>\n"; 
echo "    	<tr><td><input name=\"submit\" type=\"submit\"  value=\"Get apointment\" /></td></tr>\n"; 

echo "    </table>\n";
echo " <label>$su</label>\n";   
echo "\n"; 
echo "</form>\n";

echo "</div>\n"; 
echo "<div class=\"carArrange\">\n"; 
echo "<img src=\"images/service.png\" alt=\"car\" />\n"; 
echo "</div>\n"; 
echo "\n"; 
echo "\n"; 
echo "</body>\n"; 
echo "</html>\n"; 
echo "\n";
?>