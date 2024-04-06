<?php
   session_start();
   try{

     include_once("./connexionBD.php") ;
     $stmt = $pdo->prepare("select titre , email from inscription where email =:email and titre=:titre ") ;
     $stmt->bindParam(":email" , $_SESSION["email"]) ;
     $stmt->bindParam(":titre" , $_GET["titre"]) ;
     $stmt->execute() ;
     $result = $stmt->fetch(PDO::FETCH_ASSOC) ;

     if($result){
      // ca veut dire  l'utilisateur n'est pas inscrit sur ce cours
     }
     else{
        $stmnt = $pdo->prepare("INSERT INTO inscription (titre , email) 
                                VALUES(:titre , :email) ") ; 
        $stmnt->bindParam(":titre" , $_GET["titre"]) ; 
        $stmnt->bindParam(":email" , $_SESSION["email"]); 
        $success = $stmnt->execute() ;

        if($success){
            header("Location:../html/confirmation.php") ;
        }
       

     }
}
catch(PDOException $e){
    echo"connexion non etabli" ;
}





?>