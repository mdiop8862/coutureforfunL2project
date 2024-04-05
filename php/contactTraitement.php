<?php

     $nom = $_POST["nom"] ;
     $prenom = $_POST["prenom"] ;
     $telephone = $_POST["telephone"] ; 
     $email = $_POST["email"] ;
     $message = $_POST["message"] ;

     $to = "coutureForFun@mail.com" ; 
     $subject = "Couture For fun : message client" ;
     $content = "nom : $nom \n prenom : $prenom \ telephone : $telephone \n email : $email \n message : $message " ;

   

    try{
        mail($to , $subject , $content ) ;
        header("Location:../html/contact.php?message=email envoye avec success") ;

    }
    catch(Exception $e){
       echo $e ;
    }

     // comme nous n'avons pas unserveur de messagerie , il est evident que le message ne sera recu

     




?>

