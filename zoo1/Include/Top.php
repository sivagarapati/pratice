<?php
include('Lib/Config.php');
?>

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
            <li>
            <a href="Home.php">Home</a></li>
                <li><a href="About.php">About</a></li>
				<li><a href="Events.php">Events</a></li>
				<li><a href="Attraction.php">Attraction</a></li>
				<li><a href="Ticket.php">Tickets</a></li>
				<li><a href="Information.php">Information</a></li>
                <li><a href="ContactUs.php">Contact Us</a></li>
	<?php
	if(isset($_SESSION['uid']))
	{
	echo "<li> <a href='Viewanimals.php'>View Animals</a></li> | <li><a href='DonateFunds.php'>Donate Funds</a> </li>| <li> <a href='Logout.php'>Logout</a></li>";
	}
	else
	{
	 echo '<li> <a href="Login.php">Login</a></li>';
	 }
?>	
				
			</ul>
		</nav>
		<div id="content">
			<h1>Welcome to Zoo Zone Home page</h1>
		</div>