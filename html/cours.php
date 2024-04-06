<?php
   
   $isloged = false ; 
 
    session_start();
   if(isset($_SESSION["email"])){
     $isloged = true ; 
   }
   try{
    include_once("../php/connexionBD.php") ;

   $stmt = $pdo->prepare("select * from cours  ") ;
   $stmt->execute() ;
   $result = $stmt->fetchAll(PDO::FETCH_ASSOC) ;

   
  
}
catch(PDOException $e){
  echo "connexion non etabli" ;
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cours.css">
    <link rel="stylesheet" href="../css/index.css">
     <link rel="stylesheet" href="../css/Acceuil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
">
    <title>Document</title>
</head>
<body>

      <?php include("menu.php") ?>

      <div class="cours_main">

      <?php
         foreach ($result as $rows) { ?>
         <div class="niveau1">
               <div class="desc">
                  <p class="niveauTitle fs-2"><?php echo $rows["titre"] ?></p>
                  <p class="niveauDesc"><?php echo $rows["description"] ?></p>

                        <?php
                                if($isloged == true ){ 
                                  try {
                                    $stmt = $pdo->prepare("SELECT * FROM inscription WHERE email = :email AND titre = :titre");
                                    $stmt->bindParam(":email", $_SESSION["email"]);
                                    $stmt->bindParam(":titre", $rows["titre"]);
                                    $stmt->execute();
                                    $inscription_result = $stmt->fetch(PDO::FETCH_ASSOC);
                                 } catch(PDOException $e) {
                                    // Gestion des erreurs
                                 }
                                 if($inscription_result){?>
                                   
                                  <a style="text-decoration : none ; color : inherit" href="../php/desinscriptionCours.php?titre=<?php echo $rows['titre']; ?>">

                                   <div class="btn-contain">
                                          <p class="_btn" >Se desinscrire</p>
                                   </div>

                                   </a>

                               <?php } ?>

                               <?php if(! $inscription_result) {?>


                                <a style="text-decoration : none ; color : inherit" href="../php/coursInscription.php?titre=<?php echo $rows['titre']; ?>">

                                    <div class="btn-contain">
                                           <p class="_btn" >S'inscrire</p>
                                     </div>

                                    </a>

                                <?php }?>
                                    
                        <?php } ?>


                 
               </div>
               <img src="<?php echo "../images/".$rows["image"] ?>" alt="" style="width : 100%">
              </div>
            
        <?php } ?>

          
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




