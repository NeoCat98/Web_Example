<?php session_start();
	$msg = '';
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$dui = $_POST['dui'];
		$name = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$gender = $_POST['gender'];
		$birth = $_POST['birth'];
		$tel = $_POST['tel'];
		$civilStatus = $_POST['civilStatus'];
		$exp = $_POST['exp'];
		$std = $_POST['std'];
		$username = $_SESSION['usuario'];
		require("connection.php");
		if($msg == ''){
			$statment = $connection->prepare('INSERT INTO curriculums (id_curriculums,curriculums_DUI,curriculums_nombre, curriculums_apellido,curriculums_genero,curriculums_numero,curriculums_birthdate,curriculums_estado, curriculums_experiencia,curriculums_formacion,curriculums_username)
					VALUES (null,:curriculums_DUI,:curriculums_nombre,:curriculums_apellido,:curriculums_genero,:curriculums_numero ,:curriculums_birthdate,:curriculums_estado,:curriculums_experiencia,:curriculums_formacion, :curriculums_username)');
			$statment->execute(array(
					':curriculums_DUI' => $dui,
					':curriculums_nombre' => $name,
					':curriculums_apellido' => $lastname,
					':curriculums_genero' => $gender,
					':curriculums_numero' => $tel,
					':curriculums_birthdate' => $birth,
					':curriculums_estado' => $civilStatus,
					':curriculums_experiencia' => $exp,
					':curriculums_formacion' => $std,
					':curriculums_username' => $username
				));
			$msg .= '<i>Your curriculum vitae has been created</i>';
		}
		
	}
	require('views/create_curriculum.php');
?>