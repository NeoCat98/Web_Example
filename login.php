<?php session_start();
	$error = '';
	if(isset($_SESSION['usuario'])){
		header('location: index.php');
	}
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password = hash('sha512',$password);

		require("connection.php");

		$statment = $connection->prepare('SELECT * FROM usuarios WHERE user_name = :username AND user_password= :password');
		$statment->execute(array(
			':username' => $username,
			':password' => $password
		));
		$resultado = $statment->fetch();


		if($resultado !== false){
			$_SESSION['usuario'] = $username;
			header('location: views/principal_view.php');
		}
		else{
			$error .= '<i>Username doesnt exist</i>';
		}

	}
require('views/login_view.php');
?>