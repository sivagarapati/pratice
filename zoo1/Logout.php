<?php
	include('Lib/Config.php');
	
	session_destroy();
	header("location:Home.php");
?>