<?php
	require_once("../Lib/Config.php");
	session_destroy();
	header("location: index.php");
?>