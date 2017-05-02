<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8"/>
	<title>Zoo Zone</title>
	<link rel="stylesheet" type="text/css" href="StylesSheet.css"/>
	<script type ="text/javascript" src="ticket.js">
	</script>
	</head>
	<body background="ProjectIMG/Bgimage.jpg">
		<div class="banner">
			<a href="home.php">
			<img src="ProjectIMG/Logo.png">
			</a>
		</div>
		<br></br>
		<nav>
			<ul>
				<li><a href="Home.php">Home</a></li>
				<li><a href="Events.php">Events</a></li>
				<li><a href="Attraction.php">Attraction</a></li>
				<li><a href="Ticket.php">Tickets</a></li>
				<li><a href="Information.php">Information</a></li>
				<li><a href="About.php">About</a></li>
			</ul>
		</nav>
		
		<div id="content">
			<h1>Zoo's Tickets Reservation</h1>
		</div>
		<form>
			<p>Number Of Tickets Per Adult(each $40): <input type ="text" name="ticketAdult" id="ticketAdult"/> </p>
			<p>Number Of Tickets Per Child(each $20) : <input type ="text" id="ticketChild"/> </p>
			<p>Number Of Tickets Per Senior citizens (each $30): <input type ="text" id="ticketSenior"/> </p>
			<p id="subtotal"></p>   
		
			<!--the droplist option index value is same as the actual price to get value from its selected index -->
			<p> Parking options :
			<select name="parking" id="parking">
						<option value="">select</option>
						<option value="15">Bus($15)</option>
						<option value="10">car/minitrunck($10)</option>
						<option value="8">motorcycle($8)</option>
			</select>
			</p>
			
			<input type="button" id="submit" value="Submit"/>
			<input type="button" id="clear" value="Clear"/>
			<p id="totalResult"></p>
		</form>

		<div id="footer">
			Copyright to &copy Zoo Zone.
		</div>
	</body>
</html>