<?php 

require 'database.php';
if ($_GET) {
	$id= $_GET['id'];
    $db = Database::connect();
	$supr = $db->prepare("DELETE FROM client WHERE id=?");
$supr->execute(array($id));

header("location: index.php");
}


 ?>