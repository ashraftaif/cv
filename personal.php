<?php

?>

<!DOCTYPE html>
<head>


<title>Personal Page</title>

<link rel="stylesheet" href="personal.css">

</head>

<body>
<div id="hed"> 
<ul>
<a href="index.html"><li>Home</li></a>
<a href="personal.html"><li>Personal Details</li></a>
<a href="education.html"><li>Educational Background</li></a>
<a href="skil.html"><li>Skills</li></a>
<a href="referen.html"><li>References</li></a>
</ul>
</div>
<!--<div id="menu">
<ul>
<a href="index.html"><li>Home</li></a>
<a href="contact.html"><li>Contact</li></a>
<a href="signup.html"><li>Signup</li></a>
<a href="login.html"><li>Login</li></a>
</ul>
</div>-->
<div id="sbleft">
 <center>
<img id="src" src="taif.jpg" alt="Smiley face" height="250" width="250">
<h1>Resume of</h1>
<form action="/action_page.php">
  Name:<br>
  <input type="text" name="firstname" value="Mickey">
  <br>
  Address:<br>
  <input type="text" name="lastname" value="Mouse">
  <br>
  Mobile:<br>
  <input type="text" name="firstname" value="Mickey">
  <br>
  <br>
  <input type="submit" value="Submit">
</form> 
</center>

</div>

<div id="cont">
<center>
<h1>Personal Details:</h1>
<form id="sform" method="post" action="#" onsubmit="return valiform()">
<table border="2px">

<tr><td>Name:</td>
<td><input type="text" id="name" name="name" placeholder="Your name.." /></td>
</tr>

<tr><td>Father's Name:</td>
<td><input type="text" id="fname" name="id" placeholder="Your Father's Name.." /></td>
</tr>

<tr><td>Mother's Name:</td>
<td><input type="text" id="mname" name="id" placeholder="Your Mother's Name.." /></td>
</tr>

<tr><td>Date of Birth:</td>
<td><input type="date" id="bdate"name="bday"></td>
</tr>

<tr><td>Nationality:</td>
<td><select>
  <option value="volvo">Bangali</option>
  <option value="saab">Indian</option>
  <option value="vw">British</option>
  <option value="audi" selected>Non Bangali</option>
</select></td>
</tr>

<tr><td>Religious:</td>
<td><select>
  <option value="volvo">Islam</option>
  <option value="saab">Hinduism</option>
  <option value="vw">Christianity</option>
  <option value="audi" selected>Buddhism</option>
</select></td>
</tr>


<tr><td>Blood Group :</td>
<td><select>
  <option value="volvo">A+</option>
  <option value="saab">B+</option>
  <option value="vw">O+</option>
  <option value="audi" selected>A-</option>
  <option value="volvo">B-</option>
  <option value="volvo">O-</option>
  <option value="volvo">AB+</option>
  <option value="volvo">AB-</option>
  <option value="volvo">None</option>
</select></td>
</tr>

<tr><td>Marital Status:</td>
<td><select>
  <option value="volvo">Married</option>
  <option value="saab">Non-Married</option>
</select></td>
</tr>

<tr><td>Permanent address :</td>
<td><input type="text" id="padd" name="pass" placeholder="Your Permanent address.." /></td>
</tr>
<tr> <td> <input type="submit" id="submit" value="Submit"  /></td></tr>

</table>
</form>
</center>
</div>

<script>
function valiform()
{
	var a1=document.forms["sform"]["name"].value;
	var a2=document.forms["sform"]["fname"].value;
	var a3=document.forms["sform"]["mname"].value;
	var a4=document.forms["sform"]["bdate"].value;
	var a5=document.forms["sform"]["padd"].value;
	if(a1==null ||a1=="")
	{
		window.alert(" Id must be field out");
		return  false;
	}
	else if(a2==null ||a2=="")
	{
		window.alert("Name must be field out");
		return  false;
	}
	else if(a3==null ||a3=="")
	{
		window.alert("User name must be field out");
		return  false;
	}
	else if(a4==null ||a4=="")
	{
		window.alert("Password must be field out");
		return  false;
	}
	
	else if(a5==null ||a5=="")
	{
		window.alert("Password must be field out");
		return  false;
	}
}

</script>

<div id="footer">
<h2>Find me on social media</h2>

</div>


</body>
</html>
