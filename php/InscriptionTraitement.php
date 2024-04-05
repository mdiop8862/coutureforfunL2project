<?php 

$nom = $_POST["nom"] ; 
$prenom = $_POST["prenom"] ; 
$email = $_POST["email"] ;
$telephone = $_POST["telephone"] ; 
$password = $_POST["password"] ; 

try{
      include_once("./connexionBD.php") ;

     $stmt = $pdo->prepare("select email from users where email =:email ") ;
     $stmt->bindParam(":email" , $email) ;
     $stmt->execute() ;
     $result = $stmt->fetch(PDO::FETCH_ASSOC) ;

     if($result){
        header("Location: Inscription.php?error=email existe deja ") ;
     }
     else{
        $stmnt = $pdo->prepare("INSERT INTO users (nom , prenom , email , telephone , password)
                                VALUES(:nom , :prenom , :email , :telephone , :password)") ; 
        $stmnt->bindParam(":nom" , $nom) ; 
        $stmnt->bindParam(":prenom" , $prenom) ; 
        $stmnt->bindParam(":email" , $email)  ; 
        $stmnt->bindParam(":telephone" , $telephone) ;
        $stmnt->bindParam(":password" , md5($password)) ;
        $success = $stmnt->execute() ;

        if($success){
            header("Location:../html/connexion.php") ;
        }
        else{
            header("Location:../html/Inscription.php?success=false") ;
        }

     }
}
catch(PDOException $e){
    echo"connexion non etabli" ;
}






?>

