<?php
    session_start() ;
    $email = $_POST["email"] ;
    $password = $_POST["password"] ;

   try{

    include_once("./connexionBD.php") ;
    $stmnt = $pdo->prepare("select * from users where email=:email AND password=:password ");
    $stmnt->bindParam(":email",$email) ;
    $stmnt->bindParam(":password" , md5($password)) ;
    $stmnt->execute() ;
    $result = $stmnt->fetch(PDO::FETCH_ASSOC) ;
    if($result){
        $_SESSION["email"] = $email ;
        $_SESSION["nom"] = $result["nom"] ;
        $_SESSION["prenom"] = $result["prenom"] ;
        $_SESSION["telephone"] = $result["telephone"] ;
        header("Location:../html/cours.php") ;
    }
    else{
        header("Location:../html/connexion.php?message=email ou mot de passe incorrect") ;
    }

   }
   catch(PDOException $e){
    echo "connexion non etablit" ;
   }





?>