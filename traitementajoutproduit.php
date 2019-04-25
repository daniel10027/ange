<?php

require'database.php';
if(isset($_POST)){
  $nom = $_POST['nom_produit'];
  $categorie = $_POST['categorie_produit'];
  $prix = $_POST['prix_produit'];
  $description = $_POST['description_produit'];
$quantite = $_POST['quantite_disponible'];




  $db = Database::connect();
  $insert = $db->Prepare("
    INSERT INTO `produit`(`nom_produit`, `categorie_produit`, `prix_produit`, `description_produit`, `quantite_disponible`) VALUES (?,?,?,?,?)"
  );
$insert->execute(array($nom, $categorie, $prix, $description, $quantite));
  session_start();
    

  header("location:produitsadmin.php");
}






?>