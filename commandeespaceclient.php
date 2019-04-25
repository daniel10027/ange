<?php 
$prix = 7500;
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
          <link rel="stylesheet" href="css/drop.css"> 
          <link rel="stylesheet" href="css/animation.css">   
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
         <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
       
        
         
    <body style="background-image: url('img/martpointe.jpeg');background-size: cover;">

     
           <header style="background-color: #999E42";>

               
               <a href="index.php"><img src="img/LO2.png"></a></li>

            <nav >
                <ul>
                    <li style="color: blue; text-align: left ;margin-left: -3%;" >Bienvenue <?php echo $afficher['nom'];  ?>     </li>
                     <li><a href="infoespaceclient.php" >MES INFORMATIONS</a></li>
                    <li><a href="commandeespaceclient.php">COMMANDER</a></li>
                     <li><a href="voirmescommandeclient.php">MES COMMANDES</a></li>
                    <li><a href="deconnexion.php">DECONNEXION</a></li>
                   
                </ul>
            </nav>

          </header>
          <br>

          <section id="commande">



  <div class="animated bounceInLeft">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header"><h2><center>FORMULAIRE DE COMMANDE</center></h2></div>
      <div class="card-body">
        <form method="post" action="traitemantcommande.php" role='form' >
         
          <div class="form-group"  >
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputName">Nom</label>
                <input class="form-control" id="exampleInputName" type="text"   name="nom" value="<?php echo $afficher['nom']; ?>" >
              </div>
              

            </div>
          </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email </label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" name="mail" value="<?php echo $afficher['mail']; ?>" >
          </div>
          <div class="col-md-12">
                <label for="exampleInputName">localite</label>
                <input class="form-control" id="exampleInputName" type="text"   name="localite" value="<?php echo $afficher['localite']; ?>" >
              </div>
          <div class="form-group">


           <div class="form-row">    
             <div class="col-md-6">

              <div class="form-group">
  <label for="sel1">Nom du produit</label>
  <select class="form-control" id="sel1" name="nom_produit">
   <option> <h3 style="color: blue";>Materiaux</h3></option> 
    <option>CASQUE DE CHANTIER</option>
    <option>PELLES</option>
    <option>PAQUET DE PONITES</option>
    <option>BROUETTES</option>
     <option>FEUILLES DE TOLES</option>
    <option>PAQUET DE CIMENT</option>
    <option>BRIQUE DE CONSTRUCTION</option>
    <option>TONNE DE GRAVIER</option>
     <option>FER A BETON</option>
    <option>ECHAFFAUDAGE</option>
     <option> <h3 style="color: blue">---------------</h3></option>
    <option>BETONNEUSE</option>
    <option>CAMION BAINE</option>
     <option>DAMEUSE</option>
    <option>GRUE CHAINEE</option>
    <option>PERFOREUSE</option>
    <option>CHARGEUR-PELLETEUSE</option>
     <option>PULVIMISEUR</option>
    <option>TOMBERAU</option>
    <option>NIVELEUSE</option>
    <option>COULEUSE A BETON</option>
  </select>
</div>    
           
  </div>
            
              <div class="col-md-6">

                <div class="form-group">
  <label for="sel1">Categorie</label>
  <select class="form-control" id="sel1" name="category_produit">
    <option>MATERIAUX</option>
    <option>ENGINS</option>
   
  </select>
</div>

              </div>
<br>
            
</div>  
        

              </div>

                   <div class="form-group">


           <div class="form-row">    
             <div class="col-md-6">

            
           
  </div>
            
              <div class="col-md-6">

                  <div class="form-group">
     <div class="form-group">
  <label for="sel1">Quantitee</label>
   <input class="form-control" id="exampleInputName" type="text"   name="quantite"  placeholder="Exemple : 10">
 
</div>    
           
  
</div>    
      
</div>

              </div>
<br>
            
</div>  
        

              </div>


            </div>
            <br>
            <div class="container">
          <div class="row ">
            <div class="col-md-2"></div>


           <button type="submit" class="btn btn-primary btn-block" name="submit1">Commander</button><br>

          </div>
          <br>
          <div class="col-md-2"></div>
            <center>  <button class="btn btn-primary btn-block" type="button" name="else"><a href="espaceclient.php"  style="color: white;">Annuler</a></button></center>
        </div><br>
          </div>

          <br>
        
        </form>
       
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
 

          </section>


          <br>

           

    </body>

     <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>



 <html>