function displayNextImage() {
              x = (x === images.length - 1) ? 0 : x + 1;
              //document.getElementById("myImage").src = images[x];
			  var doc = document.getElementById("myImage");
			  doc.src = "images/hatch/" + images[x];
          }

          function displayPreviousImage() {
              x = (x <= 0) ? images.length - 1 : x - 1;
              //document.getElementById("myImage").src = images[x];
			  var doc = document.getElementById("myImage");
			  doc.src = "images/hatch/" + images[x];
          }

          function startTimer() {
              setInterval(displayNextImage, 3000);
          }
	var images = [], x = -1;
	images[0] = "1 (1).jpg";
	images[1] = "1 (2).jpg";
	images[2] = "1 (3).jpg";
	images[3] = "1 (4).jpg";
	images[4] = "1 (5).jpg";
	images[5] = "1 (6).jpg";
	images[6] = "1 (7).jpg";
	images[7] = "1 (8).jpg";
	images[8] = "1 (9).jpg";
	images[9] = "1 (10).jpg";
	images[9] = "1 (11).jpg";	
	images[10] = "1 (12).jpg";
	images[11] = "1 (13).jpg";
	images[12] = "1 (14).jpg";
	images[13] = "1 (15).jpg";
	images[14] = "1 (16).jpg";
	images[15] = "1 (17).jpg";
	images[16] = "1 (18).jpg";
	images[17] = "1 (19).jpg";
	images[18] = "1 (20).jpg";
	images[19] = "1 (21).jpg";
	images[20] = "1 (22).jpg";
	images[21] = "1 (23).jpg";
	images[22] = "1 (24).jpg";
	images[23] = "1 (25).jpg";
	images[24] = "1 (26).jpg";
	images[25] = "1 (27).jpg";
	images[26] = "1 (28).jpg";
	images[27] = "1 (29).jpg";
	images[28] = "1 (30).jpg";
	images[29] = "1 (31).jpg";
	images[30] = "1 (32).jpg";
	images[31] = "1 (33).jpg";
	images[32] = "1 (34).jpg";
	images[33] = "1 (35).jpg";