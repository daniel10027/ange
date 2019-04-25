<?php

require'database.php';
if(isset($_POST)){
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $mail = $_POST['mail'];
  $matricule = $_POST['matricule'];
  $telephone = $_POST['telephone'];

  echo $nom;
  echo $prenom;
  echo $mail;
  echo $matricule;
  echo $telephone;






  $db = Database::connect();
  $insert = $db->Prepare("INSERT INTO `employe`(`nom`, `prenom`, `mail`, `matricule`, `telephone`) VALUES (?,?,?,?,?)");
$insert->execute(array($nom, $prenom, $mail, $matricule, $telephone));
  session_start();
    

  header("location:employes.php");
}
else{


}




?>