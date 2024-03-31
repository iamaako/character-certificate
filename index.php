<html>
<head>
<title>:: AARIF KHAN ::</title>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<meta name="HandheldFriendly" content="true">
<link href="css/bio.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table id="rtab" name="rtab" cellspacing="5" cellpadding="5"><tr><th colspan="4" style="font-family:cambria;font-size:20px"><b>चरित्र प्रमाण-पत्र </b><br></th></tr>

<tr><td><form method="post" <form enctype="multipart/form-data" 
action="character_certificate_frame.php" onsubmit="return call() "></td></tr>

<tr><td> 
यह प्रमाणित किया जाता है कि<span style="color:red;">*</span>&nbsp; <select name="s1" style="height:25px;width:80px;" required >
<option value="">Select...</option>
<option value="श्री">श्री</option>
<option value="श्रीमती">श्रीमती</option>
<option value="सुश्री">सुश्री</option>
</select> &nbsp; <input type="text" name="name" style="height:25px;"  id="name" maxlength="30"  required/></td></tr>
<tr><td> 
पुत्र/पत्नी/पुत्री श्री <span style="color:red;">*</span>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="s2"style="height:25px;width:80px;" required>
<option value="">Select...</option>
<option value="पुत्र">पुत्र</option>
<option value="पत्नी">पत्नी</option>
<option value="पुत्री श्री">पुत्री श्री</option>
</select> &nbsp; <input type="text" name="fname" style="height:25px;" id="fname" maxlength="30"  required/><br></td></tr>
<tr><td>
निवासी <span style="color:red;">*</span>&nbsp;<input type="text" style="height:25px;" name="village" id="village" maxlength="80" required/>
&nbsp;को<span style="color:red;">*</span> &nbsp; <input type="text" name="year" style="width:50px;height:25px;" id="year"   />&nbsp; &nbsp; 
<select name="s3" id="y1"  style="height:25px;width:80px;" required>
<option value="">Select...</option>
<option value="जन्म से">जन्म से</option>
<option value="वर्षोँ से">वर्षोँ से</option>
</select>&nbsp; व्यक्तिगत रूप से जानता हूं। मेरी जानकारी में इनका चरित्र उत्तम है। ये मेरे सम्बन्धी नहीं है। <br></td></tr>

<tr><td>
दिनांक &nbsp;<input type="date"   value="2024-03-31" style="width:185px;height:25px;" name="date1" id="ps"/><br></td></tr>
<tr><td>पोस्ट<span style="color:red;">*</span>&nbsp;<input type="text" style="height:25px;" name="post" id="p" required/><br></td></tr>  

<tr><td>
थाना<span style="color:red;">*</span>&nbsp;<input type="text" style="height:25px;" name="police" id="p"  required/><br></td></tr>
<tr><td>

जिला<span style="color:red;">*</span>&nbsp;<input type="text" style="height:25px;" name="district" id="d" required /><br></td></tr>
<tr rowspan="2"><td colspan="3">
<div style="margin-left:-35px;">
<table>
<tr><td align="center" colspan="3" ><div style="font-family: cambria;font-size:20px;background-color:#285caf;color:white;width:680px;">Choose format and Click on button</div></td></tr>
<tr><td><br></td></tr>
<tr><td>
&nbsp;&nbsp; &nbsp;&nbsp; <img id="myImg" src="img/c1.png"  width="200" height="200"/><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="submit" name="submit"  formtarget="_blank">1 format</button>
</td>
<td>
<img id="myImg1" src="img/b2.png"  width="200" height="200"/><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="submit" name="submit1" formtarget="_blank">2 format</button>
</td>
</tr>
<tr><td colspan="2" align="center"><a href="" target="_new">Character Certificate Printing Instructions</a></td></tr>
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">x</span>
  <img class="modal-content" id="img01">
 
</div>
<div id="myModal1" class="modal">
  <span class="close">x</span>
  <img class="modal-content" id="img02">
 
</div>

</table>
</div>
</td>
</tr>
</table></div></form>
<!--1 format-->
<script>
function call()
{
	var val1 = document.getElementById('y1').value;
	var val2 = document.getElementById('year').value;
	
	if(val1== 'वर्षोँ से' && val2== '')
	{
		alert('Please Select year');
		document.getElementById('year').focus();
		document.getElementById("year").style.border = "2px solid red";
		return false;
	}
	
	
}
</script>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
//var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    //captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>

<!--2 format-->
<script>
// Get the modal
var modal1 = document.getElementById('myModal1');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img1 = document.getElementById('myImg1');
var modalImg1 = document.getElementById("img02");

img1.onclick = function(){
    modal1.style.display = "block";
    modalImg1.src = this.src;
    
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[1];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal1.style.display = "none";
}
</script>

</body>
</html>