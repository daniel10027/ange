<?php

require'database.php';
if(isset($_POST)){
  
  $mail = $_POST['mail'];
  
  $password = $_POST['password'];
  
$db = Database::connect();
$verify = $db->Prepare("
  SELECT * FROM client WHERE mail = ? AND password = ? ");
$verify->execute(array($mail, $password));
if ($test = $verify -> fetch() && ($mail == "danielguedegbe10027@gmail.com"  && $password == 1234))  {

   {
    session_start();
      $_SESSION['id'] = $test['id'];

  header("location:admin.php");
}



}

  else{ 
    $verify = $db->Prepare("
  SELECT * FROM client WHERE mail = ? AND password = ? ");
$verify->execute(array($mail, $password));
if ($test = $verify -> fetch()) {
  session_start();
      $_SESSION['id'] = $test['id'];

  header("location:espaceclient.php");

}

}



}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Archange Industrie</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/animation.css">
</head>
<body>
    <div style="height: 50%; width: 20%;margin-left: 40%;margin-right: 40%; margin-top: 3%;"  class="animated rubberBand">
        <!-- Card -->
<div class="card">

  <!-- Card image -->
  <img class="card-img-top" src="sup.jpg" alt="Card image cap">

  <!-- Card content -->
  <div class="card-body">

    <!-- Title -->
    <h6 class="card-title"><a>Il semble que vous n etes pas inscrit , veillez crrer un compte pour vous connecter</a></h6>
    <!-- Text -->
  
    <center ><a href="register.php" class="btn btn-primary">OK ,je crrer mon compte</a></center>

  </div>

</div>
<!-- Card -->
    </div>
</body>
</html>