<?php
	try{
		$connection = new PDO('mysql:host=localhost;dbname=SED','root','');
	}catch(PDOException $error){
		echo "Error: " . $error->getMessage();
	}

?>