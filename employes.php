<?php 

session_start();
require "database.php";
$db = Database::connect();
$user = $db -> prepare("SELECT * FROM employe WHERE id = ?");
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
                    <li style="color: blue; text-align: left ;margin-left: -3%;" >  <a href="admin.php" >Espace administration</a>   </li>
                     <li><a href="clients.php" >Nos clients</a></li>
                    <li><a href="produitsadmin.php">Nos produits</a></li>

                     <li><a href="employes.php">Nos Employes</a></li>
                     <li><a href="messagerecu.php">Messages recu</a></li>

                    <li><a href="deconnexion.php">Deconnexion</a></li>
                   
                </ul>
            </nav>

          </header>

<br>
<br>  <div class="container admin">
            <div class="row">
                <h1><strong><span class="glyphicon glyphicon-list-alt">LISTE DES EMPLOYES  </strong><a href="ajem.php" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus"></span> Ajouter un nouveaul employe</a></h1> </strong></div><br><table class="table table-striped table-bordered">
              
                  <thead>
                    <tr>
                      <th>NOM </th>
                      <th>PRENOM</th>
                      <th>E-MAIL</th>
                     
                      <th>TELEPHONE</th>
                      <th>ACTION</th>
                     
                     
                    </tr>
                  </thead>
                  <tbody>
                     <?php 
                        $view = $db -> query("SELECT * FROM employe");
                       while ($afficher = $view -> fetch()) {
                        
                      ?>
                      <tr>
                            <td><?php echo $afficher['nom'] ?></td>
                            <td><?php echo $afficher['prenom'] ?></td>
                            <td><?php echo $afficher['mail'] ?></td>
                          
                              <td><?php echo $afficher['telephone'] ?></td>
                           
                            <td width=300>

                                <a class="btn btn-primary" href="contactemployes.php?id=<?php echo $afficher['id']; ?>"><span class="glyphicon glyphicon-pencil"></span> Contacter</a>
                          
                            <a class="btn btn-danger" href="supprimeremployes.php?id=<?php echo $afficher['id']; ?>"><span class="glyphicon glyphicon-remove"></span> Supprimer</a>
                            </td>
                     </tr>
                   <?php } ?>
                    
                  </tbody>
                 
                  
                 
                </table>
            </div>
        </div>

          <br>

  
 
    
           

    </body>

 <html>