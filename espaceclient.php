<?php 

session_start();
require "database.php";
$db = Database::connect();
$user = $db -> prepare("SELECT * FROM client WHERE id = ?");
$user -> execute(array($_SESSION['id']));
$afficher = $user -> fetch();

?>

<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
        <title>ARCHANGE INDUSTRIE</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="style.js"></script>
        <script src="js/script.js"></script> 
         <link rel="stylesheet" href="css/index.css">       
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
       
        
         
    <body>


     
           <header style="background-color: #999E42";>

               
               <a href="index.php"><img src="img/LO2.png"></a></li>

            <nav >
                <ul>
                    <li style="color: white; text-align: left ;margin-left: -3%;" >BIENVENUE <?php echo $afficher['nom'];  ?>     </li>
                     <li><a href="infoespaceclient.php" >MES INFORMATIONS</a></li>
                    <li><a href="commandeespaceclient.php">COMMANDER</a></li>
                     <li><a href="voirmescommandeclient.php">MES COMMANDES</a></li>
                    <li><a href="deconnexion.php">DECONNEXION</a></li>
                   
                </ul>
            </nav>

          </header>
<BR>
<marquee><h6><b><i>APRES TOUTES CONMMANDES , VOUS DEVEZ IMPRIMER LA FICHE DE LA CONMMANDE DANS VOTRE ESPACE CLIENT COTE VOIR MES CONMMANDES ET VOUS RENDRE EN AGENCE POUR LE PAIEMENT</i></b></h6></marquee>
<BR>
          <div style="height: 50%;background-color: black;margin-bottom:5%; ">
            
                                <div class="card testimonial-card" style="background-color: #999E42;">

  <!-- Background color -->
  <div class="card-up indigo lighten-1"></div>

  <!-- Avatar -->
  <div class="avatar mx-auto white">
<br>
    <img src="img/profile.png" class="rounded-circle" alt="image">
  </div>

  <!-- Content -->
  <div class="card-body">
    <!-- Name -->
    <h1 class="card-title" style="color: black;"> <?php echo $afficher['nom'];  ?>  </h1>
    <hr>
    <!-- Quotation -->
    <p style="color: black;"><i class="fas fa-quote-left"><div id="who" style="background-color: black; color: white;">
                  <br>
                 <center> <h1 >ARCHANGE INDUSTRIE : Comment Ca marche ?</h1></center>


                            <div class="container"  style="background-color: #999E42;">
  <div class="row"  style="background-color: #999E42;">
   
    <div class="col-md-3">1<br>Choisissez votre matériel, ou vos Engins et 
Accédez à +20 000 machines au plus près de votre chantier</div>
    <div class="col-md-3">2<br>Réservez en ligne
En quelques clics, recevez un devis instantané</div>
     <div class="col-md-3">3<br>Vous etes livré 1 jour apres le paiement</div>
     <div class="col-md-3">4<br>Modification gratuite :
Un doute ? Annulez ou modifiez gratuitement depuis le site</div>
  </div>
  </div>
</div></i> </p>
  </div>

</div>


          </div>

          <div>
            

          </div>


          <br>
  <br>

  
    <div class="footer-copyright text-center py-3" style="background-color: #999E42";><p style="color: white;">© 2019 Copyright:  <a href="index.php" style="color: blue;">ARCHANGE-INDUSTRIE</a></p>
     
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
     
    
           

    </body>

 <html>