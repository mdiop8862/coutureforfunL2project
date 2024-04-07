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

    
        <img src="../images/inscription.svg" alt=""  style="width : 30%">
        <div class="form-container">
             <p class="fs-3">Isncrivez vous</p>
             <p id="error" class="text-danger"></p>
             <form action="../php/InscriptionTraitement.php" method="post">

             <div class="d-flex mb-3 justify-content-between">

             <div  style="width : 100%" >
                    <div>
                        
                       <label for="nom" class="form-label">Nom</label>
                       <p id="errnom"></p>
                    </div>

                    <div>
                        <input type="text" id="nom" name="nom" require >
                    </div>
                    
                    
             </div>

             <div  style="width : 100% ; margin-left : 15px" >
                    <div>
                        
                       <label for="prenom" class="form-label">Prenom</label>
                       <p id="errprenom" class="text-danger"></p>
                    </div>

                    <div>
                        <input type="text" id="prenom" name="prenom" require >
                    </div>
                    
             </div>
            
             </div>

             <div class="d-flex mb-3 justify-content-between">

             <div  style="width : 100%" >
                    <div>
                        
                       <label for="email" class="form-label">Email</label>
                       <p id="errmail" class="text-danger"></p>
                       
                    </div>

                    <div>
                        <input type="email" id="email" name="email" require >
                    </div>
                    
                    
             </div>

             <div  style="width : 100% ; margin-left : 15px" >
                    <div>
                        
                       <label for="telephone" class="form-label">Tel</label>
                       <p id="errtel" class="text-danger"></p>
                    </div>

                    <div>
                        <input type="number" id="telephone" name="telephone" require >
                    </div>
                    
             </div>
            
             </div>
                

             <div class="d-flex mb-3 justify-content-between">

                        <div  style="width : 100%" >
                            <div>
                                
                                <label for="password" class="form-label">Password</label>
                                <p id="errpassword" class="text-danger"></p>
                            </div>

                            <div>
                                <input type="password" id="password" name="password" require >
                            </div>
                            
                            
                        </div>

                        <div  style="width : 100% ; margin-left : 15px" >
                            <div>
                                
                                <label for="cpassword" class="form-label">Confirme Password</label>
                                <p id="errcpassword" class="text-danger"></p>
                            </div>

                            <div>
                                <input type="password" id="cpassword" name="cpassword" require >
                            </div>
                            
                        </div>

             </div>

                   <div class="btn-contain_valider" >
                      <p class="_btn_valider" >Valider</p>
                   </div>

             </form>
        </div>

    </div>

    <?php include("footer.php") ?>

    <script src="../js/inscription.js" >
           /*  const btn = document.querySelector(".btn-contain_valider") ;
             const form = document.querySelector("form") ;
             btn.addEventListener("click" , (e)=>{
                 e.preventDefault() ; 
                 form.submit() ;
             })*/
    </script>
      
</body>
</html>