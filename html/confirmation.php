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


      <div class="main_confirmation" style="display : flex ; justify-content : center ; align-items : center ; padding-top : 10% ">
         <img src="../images/confirmation.svg" alt="">
      </div>
      
</body>
</html>