<?php session_start();
	$error = '';
	if(isset($_SESSION['usuario'])){
		header('location: index.php');
	}
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		$password = hash('sha512',$password);

		
		require("connection.php");

		$statment = $connection->prepare('SELECT * FROM usuarios WHERE user_name = :username LIMIT 1');
		$statment->execute(array(':username' => $username));
		$resultado = $statment->fetch();


		if($resultado != false){
			$error .= '<i>Username already exist</i>';
		}

		if($error == ''){
			$statment = $connection->prepare('INSERT INTO usuarios (id_usuarios,user_name,user_password,user_email)
				VALUES (null,:username,:password,:email)');
			$statment->execute(array(
				':username' => $username,
				':password' => $password,
				':email' => $email
			));

		}
		$error .= '<i>Your account has been created</i>';
	}

require('views/create_view.php');
?>