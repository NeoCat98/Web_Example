<?php session_start();
	require("connection.php");
	$username = $_SESSION['usuario'];
	require('views/password.php')
	
?>