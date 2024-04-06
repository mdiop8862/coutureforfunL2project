<?php

try{
    
   session_start() ;
   include("./connexionBD.php") ; 
   $stmt = $pdo->prepare("DELETE FROM inscription WHERE email = :email AND titre = :titre");
   $stmt->bindParam(":email", $_SESSION["email"]);
   $stmt->bindParam(":titre", $_GET["titre"]);
   $stmt->execute() ;

   header("Location:../html/confirmation.php") ;


}

catch(PDOException $e){

}
















?>