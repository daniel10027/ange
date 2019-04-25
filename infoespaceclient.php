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
                    <li style="color: blue; text-align: left ;margin-left: -3%;" >Details client     </li>
                     <li><a href="infoespaceclient.php" >MES INFORMATIONS</a></li>
                    <li><a href="commandeespaceclient.php">COMMANDER</a></li>
                     <li><a href="voirmescommandeclient.php">MES COMMANDES</a></li>
                    <li><a href="deconnexion.php">DECONNEXION</a></li>
                </ul>
            </nav>

          </header>
          <br>
                              <center>
                                  <div class="col-sm-6">
                  
                    
                    </form>
                    <br>
                    
                </div> 
                <br>

               
                <br>
                <div class="container admin">
            <div class="row">
              <center><h1><strong><span class="glyphicon glyphicon-list-alt"> MES INFORMATIONS  </strong></h1></center>  
                <table class="table table-striped table-bordered">
              
                  <thead>
                    <tr>
                       <th>NOM</th>
                      <th>E-MAIL</th>
                      <th>LOCALITE</th>
                      <th>MOT DE PASSE  </th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    
                     
                                <tr>
                            <td><?php echo $afficher['nom'] ?></td>
                            <td><?php echo $afficher['mail'] ?></td>
                            <td><?php echo $afficher['localite'] ?></td>
                            <td><?php echo $afficher['password'] ?></td>
                           
                           
                          
                           
                        
                           
                     </tr>


                 
                    
                  </tbody>
                 
                  
                 
                </table>
<br>
                  
                    <br>
                     <div class="form-actions">
                      <a class="btn btn-danger" href="supprimer.php"><span class="glyphicon glyphicon-remove"></span>SUPPRIMER MON COMPTE</a>
                    </div>
                    <br>
                    <div class="form-actions">
                      <a class="btn btn-primary" href="espaceclient.php"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a>
                    </div>
                         
            </div>
        </div>

              
                              </center>

          <br>

  
  
     
    
           

    </body>

 <html>