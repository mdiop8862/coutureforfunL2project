<?php
       session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="../css/Acceuil.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
">
    <title>Document</title>
</head>
<body>

    <?php include("./menu.php") ?>

    <div class="container-main">
       <div class="section-left">
          <h3>
             Plongez dans l'univers créatif de la couture avec Couture for Fun  
          </h3>
          <h3>
            Où chaque création devient une histoire à porter
          </h3>
          <p style="margin-top : 30px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deser
            unt velit nisi nemo iste sint ipsum blanditiis incidunt consectetur quas debitis optio officia illo nobis quod, quae culpa impedit earum assumenda!</p>
            <div class="btn-contactez">
            <p class="_btn-content" style="cursor : pointer ">Contactez-nous</p>
            </div>
       </div>
       <div class="section-right">
          <img src="../images/undraw_girl_just_wanna_have_fun_-9-d5u.svg" alt="" ">
       </div>
       
    </div>

    <div class="Temoignages">
      <p>CE QU'ILS DISENT DE NOUS</p>
      <hr style="width : 10% ; text-align : center ; margin : 0 auto ; margin-top : 10px ; border-width : 7px ; border-color : #FFC300 " >
      <div class="tem_container">
      <div class="tem1 temChild">
           <div class="pres" style="display : flex ; justify-content : flex-start">
               <img src="../images/avatar3.jpg" alt="" style="width : 20% ; border-radius : 100%" >
               <p style="font-weight:bold ; align-self : center ; margin-left : 10px">Diop M.</p>
           </div>
           <div class="comment" style="margin-top : 10px ">
              <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque eum exercitationem nulla molestiae?
                Iure blanditiis hic cum saepe ducimus facilis ea explicabo, totam odio ex commodi, corrupti eligendi, vitae dolores."</p>
           </div>
      </div>

      <div class="tem1 temChild">
           <div class="pres" style="display : flex ; justify-content : flex-start">
               <img src="../images/avatar2.jpg" alt="" style="width : 20% ; border-radius : 100%" >
               <p style="font-weight:bold ; align-self : center ; margin-left : 10px">Ndiaye Y.</p>
           </div>
           <div class="comment" style="margin-top : 10px ">
              <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque eum exercitationem nulla molestiae?
                Iure blanditiis hic cum saepe ducimus facilis ea explicabo, totam odio ex commodi, corrupti eligendi, vitae dolores."</p>
           </div>
      </div>

      <div class="tem1 temChild">
           <div class="pres" style="display : flex ; justify-content : flex-start">
               <img src="../images/avatar.jpg" alt="" style="width : 20% ; border-radius : 100%" >
               <p style="font-weight:bold ; align-self : center ; margin-left : 10px">Gamabari D.</p>
           </div>
           <div class="comment" style="margin-top : 10px ">
              <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque eum exercitationem nulla molestiae?
                Iure blanditiis hic cum saepe ducimus facilis ea explicabo, totam odio ex commodi, corrupti eligendi, vitae dolores."</p>
           </div>
      </div>

  </div>
                  <div class="btn-contain" >
                      <p class="_btn mt-3" style="cursor : pointer " >Voir plus</p>
                   </div>     
    </div>
     
    
    <?php include("./footer.php") ; ?>
    

</body>
</html>