<?php 

  require 'database.php';

  if ($_GET) {
  $id = $_GET['id'];
  $db = Database::connect();
  $modif = $db->Prepare("SELECT * FROM message WHERE id = ?");
  $modif->execute(array($id));
  $afficher = $modif->fetch();

  }
  ?>

<!DOCTYPE html>
<html >

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Archange Industrie</title>
  <!-- Bootstrap core CSS-->
  <link rel="stylesheet" href="css/animation.css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body style= "background-color:  #999E42">
  <div  class="animated bounceInLeft">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">REPONSE AU MESSAGE DE <?php echo $afficher['nom']; ?> </div>
      <div class="card-body">
        <form method="post" action="reponsemail.php" role='form'>
         
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputName">OBJET</label>
                <input class="form-control" id="exampleInputName" type="text"   name="ojet2" value="<?php echo $afficher['objet']; ?>" >
              </div>
              

            </div>
          </div>
        <div class="form-group">
            <label for="exampleInputEmail1"> DE : </label>
            <input class="form-control" id="exampleInputEmail1" type="TEXT" aria-describedby="emailHelp" name="expediteur" value="<?php echo $afficher['mail']; ?>" >
          </div>
          <div class="col-md-12">
                <label for="exampleInputName">REPONSE</label>
                <input class="form-control" id="exampleInputName" type="text"   name="reponse" value="" required="VEILLEZ RENSEIGNER TOUS LES CHAMPS">
              </div>
       
          
          </br>
           <button type="submit" class="btn btn-primary btn-block" name="submit1">ENVOYER</button><br>

          <center>  <button class="btn btn-primary btn-block" type="button" name="else"><a href="messagerecu.php"  style="color: white;">Annuler</a></button></center>
          <br>
        </form>
       
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
