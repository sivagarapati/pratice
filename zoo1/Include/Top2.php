<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8"/>
	<title>Zoo Zone</title>
	<link rel="stylesheet" type="text/css" href="StylesSheet.css"/>
	</head>
	<body background="ProjectIMG/Bgimage.jpg">
		<div class="banner">
			<a href="home.php">
			<img src="ProjectIMG/Logo.png"></img>
	
		</div>
		<br></br>
		<nav>
			<ul>
				<table width="100%" border="0" cellspacing="0" cellpadding="0" style="border: #FF33CC 0.02em solid">
  <tr>
    <td colspan="2"><img src="Images/Banner1.jpg" width="800" height="138"></td>
  </tr>
  <tr>
    <td height="30" colspan="2" bgcolor="#CC66CC"><span id="top">&nbsp;&nbsp;&nbsp;<a href="index.php">Home</a> | <a href="AboutUs.php">About Us</a> | <a href="ContactUs.php">Contact Us</a> | 
<?php
	if(isset($_SESSION['uid']))
	{
	echo "<a href='Viewanimals.php'>View Animals</a> | <a href='DonateFunds.php'>Donate Funds</a> |  <a href='Logout.php'>Logout</a>";
	}
	else
	{
	 echo '<a href="Login.php">Login</a>';
	 }
?>	
	</span> </td>
	
  </tr>
				
			</ul>
		</nav>
		<div id="content">
			<h1>Welcome to Zoo Zone Home page</h1>
		</div>