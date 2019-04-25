<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Archange Industrie</title>
  <link rel="stylesheet" href="css/animation.css" />
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body style= "background-color:  #999E42;">
  <div class="animated bounceInLeft">
    <div class="card card-login mx-auto mt-5" id="login">
      <div class="card-header">Connexion</div>
      <div class="card-body">
        <form method="post" action="logintr.php">
          
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input tyoe="email" class="form-control"   name="mail" required="VEILLEZ RENSEIGNER TOUS LES CHAMPS">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Mot de passe</label>
            <input class="form-control"  type="password" name="password" required="VEILLEZ RENSEIGNER TOUS LES CHAMPS">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Se souvenir du mot de passe </label>
            </div>
          </div>
        

          <button type="submit" class="btn btn-primary btn-block" name="submit2">Connexion</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Creer un compte</a>
       <!--   <a class="d-block small" href="forgot-password.php">Forgot Password?</a>-->
        </div>
         <div class="text-center">
          <a class="d-block small mt-3" href="index.php">Annuler</a>
       <!--   <a class="d-block small" href="forgot-password.php">Forgot Password?</a>-->
        </div>
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
