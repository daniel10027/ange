<!DOCTYPE html>
<meta charset="utf-8">


<?php


if(isset($_POST['submit2']))
{
      $nom = htmlspecialchars(trim($_POST['nom']));
      $mail = htmlspecialchars(trim($_POST['mail']));
      $localite = htmlspecialchars(trim($_POST['localite']));
      $password = htmlspecialchars(trim($_POST['password']));
      $passwordconf = htmlspecialchars(trim($_POST['passwordconf']));

      if($nom&&$mail&&$localite&&$password&&$passwordconf){

        if(strlen($nom) >= 4){}
          else echo "Le nom est trop court";

        if(strlen($password) > 4){
          if ($password==$passwordconf) {
            $password= md5($password);
           $host = 'localhost';
           $dbname = 'archange';
           $user = 'root';
           $password = '';
           {$pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
           
         }
          

          }
        }


         }

            else echo "les mots de passe ne sont pas identique";

        }
else echo "le mot de passe est trop court";
      







?>


<html>
<head>
        <title>ARCHANGE INDUSTRIE</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="style.js"></script>
        <script src="js/script.js"></script> 
         <link rel="stylesheet" href="css/index.css">   
          <link rel="stylesheet" href="connexion.css">    
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
         <script src="Styles/jquery-3.3.1.min.js" type="text/javascript"></script>
       
        
         
    <body>


     
           <header>

               
               <a href="index.php"><img src="img/LO2.png"></a></li>

            <nav>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="#catalogue">Catalogue</a></li>
                    <li><a href="about.php">Qui sommes nous</a></li>
                    <li><a href="#">Se connecter</a></li>
                    <li><a href="#">Autres</a></li>
                </ul>
            </nav>

          </header>

          <br>
          <center><h1 style="color: blue"><u>Espace Connexion</u></h1></center>



          <br>
          <div id="formco">
      
        <div class="container register">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Connexion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Inscription</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active text-align form-new" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading">Entrez vos identifiants</h3>
                            <div class="row register-form">
                                <div class="col-md-12">
                                    <form method="post" action="connexion.php">
                                        <div class="form-group">
                                            <input type="text" name="nom" class="form-control" placeholder="Votre nom *" value="" required=""/>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="pass" class="form-control" placeholder="Votre mot de pass *" value="" required=""/>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="submit1" class="btnContactSubmit" value="Se connecter" />
                                            <a href="ForgetPassword.php" class="btnForgetPwd" value="Login"Mot de pass oublie?></a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show text-align form-new" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h3  class="register-heading">Crer votre compte</h3>
                            <div class="row register-form">
                                <div class="col-md-12">
                                    <form method="post" action="connexion.php">
                                        <div class="form-group">
                                            <input type="text" name="nom" class="form-control" placeholder="Votre nom *" value="" required="" />
                                        </div>
                                         <div class="form-group">
                                            <input type="text" name="mail" class="form-control" placeholder="Votre  Email *" value="" required="" />
                                        </div>
                                         <div class="form-group">
                                            <input type="text" name="localite" class="form-control" placeholder="Votre  localite *" value="" required="" />
                                        </div>

                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control" placeholder="votre mot de pass *" value="" required=""/>
                                        </div>
                                         <div class="form-group">
                                            <input type="password" name="passwordconf" class="form-control" placeholder="Confirmer le mot de pass  *" value="" required="" />
                                        </div>

                                        <div class="form-group">
                                            <input type="submit" name="submit2" class="btnContactSubmit" value="s'enregistrer" />
                                          
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>

   <br>

          <br>

       <footer class="page-footer font-small unique-color-dark">

    <div style="background-color: black;">
      <div class="container">

        <!-- Grid row-->
        <div class="row py-4 d-flex align-items-center">

          <!-- Grid column -->
          <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
            <h6 style="color: white;">Restez connecté sur les reseaux sociaux!</h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-6 col-lg-7 text-center text-md-right">

            <!-- Facebook -->
            <a class="fb-ic">
              <i class="fab fa-facebook-f white-text mr-4" style="color: white;"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
              <i class="fab fa-twitter white-text mr-4" style="color: white;"> </i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic">
              <i class="fab fa-google-plus-g white-text mr-4" style="color: white;"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic">
              <i class="fab fa-linkedin-in white-text mr-4" style="color: white;"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
              <i class="fab fa-instagram white-text" style="color: white;"> </i>
            </a>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row-->

      </div>
    </div>

    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">

      <!-- Grid row -->
      <div class="row mt-3">

        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

          <!-- Content -->
          <h6 class="text-uppercase font-weight-bold">Archange Industrie</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>Lancée en Avril 2019,Archange industrie est la 1ère plateforme web ivoirienne  dédiée à la vente de matériel BTP et a la location d'engins Industriel ,elle devient la reference unique quelque soit le besoin et permet de réserver en 3min et au meilleur prix.
.</p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Nos services</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a href="#!">Materiaux</a>
          </p>
          <p>
            <a href="#!">Engins</a>
          </p>
         

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Liens utiles</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <a href="#!">Votre compte</a>
          </p>
          <p>
            <a href="#!">Devenir partenaire</a>
          </p>
          <p>
          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

          <!-- Links -->
          <h6 class="text-uppercase font-weight-bold">Nous-Contact</h6>
          <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
          <p>
            <i class="fas fa-home mr-3"></i> Abidjan rue des codeurs immeuble Nan , Cote d'ivoire</p>
          <p>
            <i class="fas fa-envelope mr-3"></i> Archange-industrie@gmail.com</p>
          <p>
            <i class="fas fa-phone mr-3"></i> + 48  73 3365 </p>
          <p>
            <i class="fas fa-print mr-3"></i> + 73 46 74 33</p>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->

  
    <div class="footer-copyright text-center py-3" style="background-color: black;"><p style="color: white;">© 2019 Copyright:  <a href="index.php" style="color: blue;">ARCHANGE-INDUSTRIE</a></p>
     
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
     
    
           

    </body>

 <html>