<?php 
require 'database.php';

  if ($_POST) {
    $id = $_POST['id'];
    $nom = $_POST['nom_produit'];
    $categorie = $_POST['categorie_produit'];
    $prix = $_POST['prix_produit'];
    $description = $_POST['description_produit'];

  $db = Database::connect();
  $modif = $db->Prepare("UPDATE produit SET nom_produit = ?, categorie_produit = ?, prix_produit = ?, description_produit = ?, WHERE id = ?");
  $modif->execute(array($nom, $categorie, $prix, $description, $id));

  header("location:produitsadmin.php");
 
  }

 ?>