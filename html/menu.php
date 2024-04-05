<?php
    $isloged = false ; 
    if(isset($_SESSION["email"])){
      $isloged = true ; 
    }
 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
">
    <title>Document</title>
</head>
<body>


      <div class="container-screen1">
          
              <nav class="navigation" >
                   <h4 class="logo"><span style="color : #FFC300">Couture</span><span style="color : #EBB300">For</span><span style=" color : #CC9C00 ">Fun</span></h4>
                   <ul >
                      <li ><a href="./index.php">Acceuil</a></li>
                      <li > <a href="./cours.php">Cours de couture</a></li>
                      <li> <a href="./devis.php">Devis personnalise</a></li>
                      <li> <a href="./contact.php">Contact</a></li>
                   </ul>

                   <?php if($isloged == true){ ?>
                    <div class="btn-contain" >
                      <p class="_btn" ><a href="../php/deconnexion.php">
                        Se deconnecter</a></p>
                   </div>
                   <?php } ?>


                   <?php if($isloged != true){ ?>

                    <div class="btn-contain" >
                      <p class="_btn" ><a href="./connexion.php">
                        Se connecter</a></p>
                   </div>

                   <?php } ?>



                             
                   
                        
             </nav>

      </div>

      
</body>
</html>