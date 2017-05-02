<?php
	require_once("../Lib/Config.php");
	$catid = $_GET['catid'];
	$del = "DELETE FROM animals WHERE Id=$catid";
	
	mysql_query($del)or die(mysql_error());
	header("location: Categories.php?ack=Category has been deleted successfully");
?>