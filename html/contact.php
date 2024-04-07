<?php
       session_start();


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

    
        <img src="../images/contact.svg" alt=""  style="width : 30%">
        <div class="form-container ml-3">
             <p class="fs-3">Contactez nous </p>
             <p id="error" class="text-danger"></p>
             <?php
                if(isset($_GET["message"])){ ?>
                <div style="text-align : center ; color : green ">
                     <?php echo $_GET["message"] ?>
                </div>

               <?php } ?>
             <form action="../php/contactTraitement.php" method="post" >
                <div class="mb-3 d-flex ">

                <div class="item">
                    <div>
                    <label for="nom" class="form-label">Nom</label>
                    </div>
                    <div>
                        <input type="text" id="nom" name="nom" require>
                    </div>
                 </div>

                 <div class="item" >
                    <div>
                    <label for="prenom" class="form-label">Prenom</label>
                    </div>
                    <div>
                        <input type="text" id="prenom" name="prenom" require>
                    </div>
                 </div>

                </div>

                <div class="mb-3 d-flex">

                        <div class="item" >
                            <div>
                            <label for="Tel" class="form-label">Tel</label>
                            </div>
                            <div>
                                <input type="text" id="Tel" name="telephone" require >
                            </div>
                        </div>

                        <div class="item">
                            <div>
                            <label for="email" class="form-label">Email</label>
                            </div>
                            <div>
                                <input type="text" id="email" name="email" require >
                            </div>
                        </div>

                </div>
                

                

                  <div class="mb-3">
                    <div>
                    <label for="message" class="form-label">Message</label>
                    </div>
                    <div>
                        <textarea name="message" id="" cols="30" rows="5"> </textarea>
                    </div>
                    
                </div>


               

                   <div class="btn-contain_valider" >
                      <p class="_btn_valider" >Valider</p>
                   </div>
             </form>
        </div>

    </div>

    <?php include("footer.php") ?>
           

    <script src="../js/contact.js">
           /*  const btn = document.querySelector(".btn-contain_valider") ;
             const form = document.querySelector("form") ;
             btn.addEventListener("click" , (e)=>{
                 e.preventDefault() ; 
                 form.submit() ;
             })*/
    </script>
      
</body>
</html>