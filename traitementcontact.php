<?php

require'database.php';
if(isset($_POST)){
  $nom = $_POST['nom'];
  $mail = $_POST['mail'];
  $localite = $_POST['localite'];
  $objet = $_POST['objet'];
  $message = $_POST['message'];
 

  echo $nom;
  echo $mail;
  echo $localite;
  echo $objet;
  echo $message;






  $db = Database::connect();
  $insert = $db->Prepare("INSERT INTO `message`(`nom`, `mail`, `localie`, `objet`, `message`) VALUES (?,?,?,?,?)");
$insert->execute(array($nom, $mail, $localite, $objet, $message));
  session_start();
    

  header("location:index.php");
}
else{


}




?>