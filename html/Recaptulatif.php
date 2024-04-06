<?php
   session_start() ;
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

    
        <img src="../images/form.svg" alt=""  style="width : 32%">
        <div class="form-container">
             <p class="fs-3">Votre Devis Personnalise</p>
            
             <form >

            <div class="d-flex mb-3 justify-content-between">

             <div  style="width : 100%" >
                    <div>
                       <label for="typeVet" class="form-label">Type de vetement </label>
                    </div>
                    
                    
                    <div>
                        <input type="text" id="typeVet" value= <?php echo $_GET["typevetement"] ?> disabled >
                    </div>
                     
                </div>

            <div style="width : 100% ; margin-left : 10px"  >
                    <div>
                        <label for="typeTissu" class="form-label" >Type de tissus </label>
                    </div>

                   
                    <div>
                        <input type="text" id="typeTissu" value= <?php echo $_GET["typeTissu"] ?>  disabled >
                    </div>
                     
                
                    
                    
            </div>

            </div>

            <div class="d-flex mb-3 justify-content-between">

             <div  style="width : 100%" >
                    <div>
                       <label for="taille" class="form-label">Taille </label>
                    </div>
                    
                    
                    <div>
                        <input type="number" id="taille" value= <?php echo $_GET["taille"] ?> disabled >
                    </div>
                     
                </div>

            <div style="width : 100% ; margin-left : 10px" >
                    <div>
                        <label for="prestation" class="form-label" >Prestation</label>
                    </div>

                   
                    <div>
                        <input type="text" id="prestation" value= <?php echo $_GET["prestation"] ?> disabled >
                    </div>
                     
                
                    
                    
            </div>

            </div>
                

                <div class="mb-3">
                    <div>
                       <label for="taille" class="form-label">Prix</label>
                    </div>
                    <?php 
                        switch ($_GET["prestation"]) { 
                            case 'Ourlets':      ?>
                                <div>
                                  <input type="number" id="taille" value=20 disabled >
                                </div>
                             <?php   break; 
                             case 'Retouches':  ?>
                             <div>
                                  <input type="number" id="taille" value=30 disabled >
                            </div>
                            <?php break; 
                            case 'Ourlets et retouches': ?>
                            <div>
                                  <input type="number" id="taille" value=50 disabled >
                            </div>
                            
                    <?php } ?>


                   
                    
                </div>


                
              <a href="./devis.php" style="text-decoration : none ; color : inherit ; cursor : pointer ">
                  <div class="btn-contain_valider" >
                      <p class="_btn_valider" >Return</p>
                   </div>
              </a>

                   
             </form>
        </div>

    </div>

    <?php include("footer.php") ?>


   
      
</body>
</html>