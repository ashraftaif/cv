<?php
?>

<!DOCTYPE html>
<head>


<title>References Page</title>

<link rel="stylesheet" href="referen.css">

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
<h1>Educational Background:</h1>
<form id="sform" method="post" action="" onsubmit="return valiform()">
<table border="2px">

<tr><th>References1:</th>

</tr>

<tr><td>Name:</td>
<td><input type="text" id="pass" name="pass" placeholder="Your Name.."></td>
</tr>

<tr><td>Designation:</td>
<td><input type="text" id="pass" name="pass" placeholder="Your Designationss.." /></td>
</tr>

<tr><td>Telephone:</td>
<td><input type="tel" name="usrtel" id="pass" placeholder="Your Telephone.."></td>
</tr>


<tr><td>Mobile:</td>
<td><input type="tel" name="usrmob" id="pass" placeholder="Your Mobile.."></td>
</tr>

<tr><td>E-mail::</td>
<td><input type="email" name="usremail" id="pass" placeholder="Your E-mail.."></td>
</tr>

<tr><th>References2:</th>

</tr>

<tr><td>Name:</td>
<td><input type="text" id="pass" name="pass" placeholder="Your Name.."></td>
</tr>

<tr><td>Designation:</td>
<td><input type="text" id="pass" name="pass" placeholder="Your Designation.."></td>
</tr>

<tr><td>Telephone:</td>
<td><input type="tel" name="usrtel" id="pass" placeholder="Your Telephone.."></td>
</tr>


<tr><td>Mobile:</td>
<td><input type="tel" name="usrmob" id="pass" placeholder="Your Mobile.."></td>
</tr>

<tr><td>E-mail:</td>
<td><input type="email" name="usremail" id="pass" placeholder="Your E-mail.."></td>
</tr>




<tr> <td> <input type="submit" id="submit" value="Submit"  /></td></tr>

</table>
</form>
</center>
</div>
<div id="footer">
<h2>Find me on social media</h2>

</div>


</body>
</html>
