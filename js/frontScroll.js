// JavaScript Document


    var oImgs = [];
	oImgs[0] = "1 (1).jpg";
	oImgs[1] = "1 (2).jpg";
	oImgs[2] = "1 (3).jpg";
	oImgs[3] = "1 (4).jpg";
	oImgs[4] = "1 (5).jpg";
	oImgs[5] = "1 (6).jpg";
	oImgs[6] = "1 (7).jpg";
	oImgs[7] = "1 (8).jpg";
	oImgs[8] = "1 (9).jpg";
	oImgs[9] = "1 (10).jpg";
	oImgs[9] = "1 (11).jpg";	
	oImgs[10] = "1 (12).jpg";
	oImgs[11] = "1 (13).jpg";
	oImgs[12] = "1 (14).jpg";
	oImgs[13] = "1 (15).jpg";
	oImgs[14] = "1 (16).jpg";
	oImgs[15] = "1 (17).jpg";
	oImgs[16] = "1 (18).jpg";
	oImgs[17] = "1 (19).jpg";
	oImgs[18] = "1 (20).jpg";
	oImgs[19] = "1 (21).jpg";
	oImgs[20] = "1 (22).jpg";
	oImgs[21] = "1 (23).jpg";
	oImgs[22] = "1 (24).jpg";
	oImgs[23] = "1 (25).jpg";
	oImgs[24] = "1 (26).jpg";
	oImgs[25] = "1 (27).jpg";
	oImgs[26] = "1 (28).jpg";
	oImgs[27] = "1 (29).jpg";
	oImgs[28] = "1 (30).jpg";
	oImgs[29] = "1 (31).jpg";
	oImgs[30] = "1 (32).jpg";
	oImgs[31] = "1 (33).jpg";
	oImgs[32] = "1 (34).jpg";
	oImgs[33] = "1 (35).jpg";
	


	for(var i=0;i<oImgs.length;i++)
	{
		var imgs = new Image();
		imgs.src = "images/hatch/" + oImgs[i];
	}

	var x = 1;

	function changeImage()
	{
		var doc = document.getElementById("myImage");
		doc.src = "images/hatch/" + oImgs[x];
		if(x<oImgs.length-1)
		{
			x ++;
		}
		else
		{
			x = 0;
		}
	}


