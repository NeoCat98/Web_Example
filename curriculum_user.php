<?php session_start();
	require("connection.php");
	$username = $_SESSION['usuario'];
	$statment = $connection->prepare('SELECT * FROM curriculums WHERE curriculums_username = :username');
	$statment->execute(array(
		':username' => $username,
	));
	require('views/inspect_curriculum.php')
?>