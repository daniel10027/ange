<?php 

  require 'database.php';

  if ($_GET) {
  $id = $_GET['id'];
  $db = Database::connect();
  $modif = $db->Prepare("SELECT * FROM produit WHERE id = ?");
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
      <div class="card-header">Modifier un produit</div>
      <div class="card-body">
        <form method="post" action="traitementmodifproduit.php" role='form'>
         
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputName">Nom produit</label>
                <input class="form-control" id="exampleInputName" type="text"   name="nom_produit" value="<?php echo $afficher['nom_produit']; ?>" >
              </div>
              

            </div>
          </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Categorie produit </label>
            <input class="form-control" id="exampleInputEmail1" type="TEXT" aria-describedby="emailHelp" name="categorie_produit" value="<?php echo $afficher['categorie_produit']; ?>" >
          </div>
          <div class="col-md-12">
                <label for="exampleInputName">Prix</label>
                <input class="form-control" id="exampleInputName" type="text"   name="prix_produit" value="<?php echo $afficher['prix_produit']; ?>" >
              </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Description</label>
                <input class="form-control" id="exampleInputPassword1" type="TEXT" name="description_produit" value="<?php echo $afficher['description_produit']; ?>" >
              </div>
             <div class="col-md-6">
                <label for="exampleInputPassword1">Quantite Disponible</label>
                <input class="form-control" id="exampleInputPassword2" type="text" name="quantite_disponible" value="<?php echo $afficher['quantite_disponible']; ?>" >
              </div>
            </div>
          </div>
          
          </br>
           <button type="submit" class="btn btn-primary btn-block" name="submit1">Modifier</button><br>

          <center>  <button class="btn btn-primary btn-block" type="button" name="else"><a href="produitsadmin.php"  style="color: white;">Annuler</a></button></center>
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
