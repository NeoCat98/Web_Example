<?php session_start();
	if(isset($_SESSION['usuario'])){
		header('location: principal_view.php');
	}
	else{
		header('location: login.php');
	}
?>