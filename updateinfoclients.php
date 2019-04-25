<?php 
require 'database.php';

  if ($_POST) {
   
    $nom = $_POST['nom'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $passwordconf = $_POST['passwordconf'];

  $db = Database::connect();
  $modif = $db->Prepare("UPDATE `client` SET `nom`=?,`mail`=?,`localite`=?,`password`=? WHERE `id`=id");
  $modif->execute(array($nom, $mail, $localite, $password));

  header("location:clients.php");
 
  }

 ?>
