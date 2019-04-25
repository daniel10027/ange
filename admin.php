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


     
           <header style="background-color: #999E42">

               
               <a href="index.php"><img src="img/LO2.png"></a></li>

            <nav >
                <ul>
                    <li style=" text-align: left ;margin-left: -3%;" >BIENVENUE MR GUEDEGBE <?php echo $afficher['nom'];  ?>     </li>
                     <li><a href="clients.php" >Nos clients</a></li>
                    <li><a href="produitsadmin.php">Nos produits</a></li>
                    <li><a href="employes.php">Nos Employes</a></li>
                     <li><a href="messagerecu.php">Messages recu</a></li>

                    <li><a href="deconnexion.php">Deconnexion</a></li>
                   
                </ul>
            </nav>

          </header>
   
  
<img src="img/admin.jpg" style="
  
  height: 80%;
  width: 100%;
  ">
     


  </footer>
  <!-- Footer -->
     
    
           

    </body>

 <html>