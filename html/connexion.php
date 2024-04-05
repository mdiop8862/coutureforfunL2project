<?php
   $isloged = false ; 
   session_start();
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
    <link rel="stylesheet" href="../css/forms.css">
    <link rel="stylesheet" href="../css/Acceuil.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
">
    <title>Document</title>
</head>
<body>

     <?php include("menu.php") ?>


    <div class="devis_main " style="margin-bottom : 9%">

    
        <img src="../images/connexion.svg" alt=""  style="width : 30%">
        <div class="form-container">
             <p class="fs-3">Connectez vous </p>
              <?php
                if(isset($_GET["message"])){ ?>
                <div style="text-align : center ; color : red ">
                     <?php echo $_GET["message"] ?>
                </div>

               <?php } ?>

            
             <form action="../php/connexionTraitement.php" method="post">
                <div class="mb-4  ">
                    <div>
                       <label for="email" class="form-label">Email</label>
                    </div>
                    <div>
                        <input type="text" id="email" name="email" >
                    </div>

                </div>

                <div class="mb-4">

                        <div>
                            <label for="password" class="form-label">Password</label>
                        </div>
                        <div>
                            <input type="text" id="password" name="password" >
                        </div>
                </div>
               

                <div class="btn-contain_valider" >
                      <p class="_btn_valider" >Valider</p>
                </div>
                <p class="mt-3"><span style="color : #54DFFE">vous n'avez pas de compte ?</span> <span style="color : #FFC300 "><a href="./inscription.php">Isncrivez vous</a></span> </p>
             </form>
        </div>

    </div>

    <?php include("footer.php") ?>

    <script>
             const btn = document.querySelector(".btn-contain_valider") ;
             const form = document.querySelector("form") ;
             btn.addEventListener("click" , (e)=>{
                 e.preventDefault() ; 
                 form.submit() ;
             })
    </script>
      
</body>
</html>