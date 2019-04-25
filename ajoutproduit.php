
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
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
   <link href="css/animation.css" rel="stylesheet">
</head>

<body style= "background-color:  #7FFF00;">
 
  <div class=" animated tada">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Ajouter un produit</div>
      <div class="card-body">
        <form method="post" action="traitementajoutproduit.php" role='form'>
         
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputName">Nom produit</label>
                <input class="form-control" id="exampleInputName" type="text"   name="nom_produit" value="" required="VEILLEZ RENSEIGNER TOUS LES CHAMPS">
              </div>
              

            </div>
          </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Categorie produit </label>
            <input class="form-control" id="exampleInputEmail1" type="TEXT" aria-describedby="emailHelp" name="categorie_produit" value="" required="VEILLEZ RENSEIGNER TOUS LES CHAMPS">
          </div>
          <div class="col-md-12">
                <label for="exampleInputName">Prix</label>
                <input class="form-control" id="exampleInputName" type="text"   name="prix_produit" value="" required="VEILLEZ RENSEIGNER TOUS LES CHAMPS">
              </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Description</label>
                <input class="form-control" id="exampleInputPassword1" type="TEXT" name="description_produit" required="VEILLEZ RENSEIGNER TOUS LES CHAMPS">
              </div>
             <div class="col-md-6">
                <label for="exampleInputPassword1">Quantite Disponible</label>
                <input class="form-control" id="exampleInputPassword2" type="text" name="quantite_disponible" required="VEILLEZ RENSEIGNER TOUS LES CHAMPS">
              </div>
            </div>
          </div>
          
          </br>
           <button type="submit" class="btn btn-primary btn-block" name="submit1">Ajouter</button><br>

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
