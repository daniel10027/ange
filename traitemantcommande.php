<?php

require'database.php';
if(isset($_POST)){
	$nom = $_POST['nom'];
	$mail = $_POST['mail'];
	$localite = $_POST['localite'];
	$nom_produit = $_POST['nom_produit'];
	$category_produit = $_POST['category_produit'];
	$prix_produit = 45000;
	$quantite = $_POST['quantite'];
	$total = $prix_produit * $quantite;


	echo $nom;
	echo $mail;
	echo $localite;
	echo $nom_produit;
	echo $category_produit;
	echo $prix_produit;
	echo $quantite;
	echo $total;





	$db = Database::connect();
	$insert = $db->Prepare("
		INSERT INTO `commande_client`(`nom`, `mail`, `localite`, `nom_produit`, `category_produit`, `prix_produit`, `quantite`, `total`) VALUES (?,?,?,?,?,?,?,?)"
	);
$insert->execute(array($nom, $mail, $localite, $nom_produit, $category_produit, $prix_produit, $quantite, $total));
}

header("location: confconmmande.php");






?>