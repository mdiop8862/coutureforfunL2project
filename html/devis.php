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

    
        <img src="../images/form.svg" alt=""  style="width : 32%">
        <div class="form-container">
             <p class="fs-3">Devis sur mesure pour vous</p>
             <?php
                if(isset($_GET["message"])){ ?>
                <div style="text-align : center ; color : green ">
                     <?php echo $_GET["message"] ?>
                </div>

               <?php } ?>
             <form action="../php/devisTraitement.php" method="post">

             <div class="d-flex mb-3 justify-content-between">

             <div  style="width : 100%" >
                    <div>
                       <label for="typeVet" class="form-label">Type de vetement </label>
                    </div>
                    
                    <select name="vetement" id="typeVet" >
                         <option value="pantalon">Pantalon</option>
                         <option value="chemise">Chemise</option>
                         <option value="jupe">Jupe</option>
                         <option value="robe">Robe</option>
                    </select>
                </div>

            <div style="width : 100%" class="radio">
                    <div>
                        <label for="typeTissu" class="form-label">Type de tissus </label>
                    </div>
                    
                    <select name="tissu" id="typeTissu" >
                         <option value="Satin">Satin</option>
                         <option value="Cotton">Cotton</option>
                         <option value="Lin">Lin</option>
                         <option value="Laine">Laine</option>
                    </select>
            </div>

             </div>
                

                <div class="mb-3">
                    <div>
                       <label for="taille" class="form-label">Taille</label>
                    </div>
                    <div>
                        <input type="text" id="taille" name="taille" >
                    </div>
                    
                </div>


                <div class="mb-3">
                    <p>Choisir une prestation</p>
                    <div>
                       <input type="radio" name="prestation" id="" value="Ourlets" >
                       <label for="Ourlets" class="form-label" style="margin-left : 5px ">Ourlets</label>
                    </div>

                    <div>
                        <input type="radio" name="prestation" id="" value="Retouches" >
                        <label for="" class="form-label" style="margin-left : 5px ">Retouches</label>
                    </div>

                    <div>
                        <input type="radio" name="prestation" id="" value="Ourlets et retouches" >
                        <label for="" class="form-label" style="margin-left : 5px ">Ourlets et Retouches</label>
                    </div>
                    
                </div>

                   <div class="btn-contain_valider" >
                      <p class="_btn_valider" >Valider</p>
                   </div>
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