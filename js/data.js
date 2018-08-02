function showPrice(str) {
  var xhttp;    
  //if (str == "") {
  //  document.getElementById("bPrice").innerHTML = "";
    return;
 // }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("bPrice").innerHTML = xhttp.responseText;
    }
  };
  xhttp.open("GET", "booking_price_val.php?q="+str, true);
  xhttp.send();
}