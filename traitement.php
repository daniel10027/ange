<?php

require'database.php';
if(isset($_POST)){
	$nom = $_POST['nom'];
	$mail = $_POST['mail'];
	$localite = $_POST['localite'];
	$password = $_POST['password'];
	$passwordconf = $_POST['passwordconf'];


	if ($password == $passwordconf) {
			$db = Database::connect();
	$insert = $db->Prepare("
		INSERT INTO `client`(`nom`, `mail`, `localite`, `password`) VALUES (?,?,?,?)"
	);
$insert->execute(array($nom, $mail, $localite, $password));
header("location: confregister.php");

	}
	else{
		echo"LES MOTS DE PASS NE SONT PAS IDENTIQUES";

	}








}






?>

