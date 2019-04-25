<?php 
require'database.php';
if ($_POST) {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $passwordconf = $_POST['passwordconf'];

   $db = Database::connect();
  $modif = $db->prepare("UPDATE client SET nom = ?, mail = ?, localite = ?, password = ? WHERE id = ?");
  $modif->execute(array($nom, $mail, $localite, $password, $id));

  header("location:infoespaceclient.php");
 
  }

 ?>
