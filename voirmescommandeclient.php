<?php 

session_start();
require "database.php";
$db = Database::connect();
$user = $db -> prepare("SELECT * FROM commande_client WHERE mail = ?");
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
                    <li style="color: blue; text-align: left ;margin-left: -3%;" >Bienvenue     </li>
                     <li><a href="infoespaceclient.php" >MES INFORMATIONS</a></li>
                    <li><a href="commandeespaceclient.php">COMMANDER</a></li>
                    <li><a href="voirmescommandeclient.php">MES COMMANDES</a></li>
                     <li><a href="deconnexion.php">DECONNEXION</a></li>
                   
                </ul>
            </nav>

          </header>


          <br>

<br>  <div class="container admin">
            <div class="row">
              <center><h1><strong><span class="glyphicon glyphicon-list-alt"> MES CONMMANDES  </strong></h1></center>  
                <table class="table table-striped table-bordered">
              
                  <thead>
                    <tr>
                       <th>NUMERO DE LA CONMMANDE</th>
                      <th>NOM DU PRODUIT</th>
                      <th>CATEGORIE</th>
                      <th>PRIX </th>
                      <th>QUANTITE CONMMANDEE</th>
                      <th>PRIX TOTAL</th>
                    </tr>
                  </thead>
                  <tbody>
                     <?php 
                        $view = $db -> query("SELECT * FROM commande_client");
                       while ($afficher = $view -> fetch()) {
                        
                      ?>
                     
                                <tr>
                            <td><?php echo $afficher['id'] ?></td>
                            <td><?php echo $afficher['nom_produit'] ?></td>
                            <td><?php echo $afficher['category_produit'] ?></td>
                            <td><?php echo $afficher['prix_produit'] ?></td>
                            <td><?php echo $afficher['quantite'] ?></td>
                            <td><?php echo $afficher['Total'] ?></td>
                          
                    
                       
                           
                     </tr>


                   <?php } ?>
                    
                  </tbody>
                 
                  
                 
                </table>
            </div>
        </div>

          <br>

<center> <button onclick="window.print();" class="btn btn-success" > IMPRIMER MA CCONMMANDE</button></center>
                       
  
    
           

    </body>

 <html>