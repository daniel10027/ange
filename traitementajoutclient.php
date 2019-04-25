<?php

require'database.php';
if(isset($_POST)){
  $nom = $_POST['nom'];
  $mail = $_POST['mail'];
  $localite = $_POST['localite'];
  $password = $_POST['password'];
  $passwordconf = $_POST['passwordconf'];

  echo $nom;
  echo $mail;
  echo $localite;
  echo $password;
  echo $passwordconf;






  $db = Database::connect();
  $insert = $db->Prepare("
    INSERT INTO `client`(`nom`, `mail`, `localite`, `password`) VALUES (?,?,?,?)"
  );
$insert->execute(array($nom, $mail, $localite, $password));
  session_start();
    

  header("location:clients.php");
}
else{


}






?>