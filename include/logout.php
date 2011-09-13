<?php 
	session_start();
	session_unset();
	session_destroy();
	$location = "Location:./index.php";
	header($location);
?>

