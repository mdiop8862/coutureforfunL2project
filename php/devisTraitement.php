<?php

    $typeVetement = $_POST['vetement'];
    $typeTissu = $_POST['tissu'];
    $taille = $_POST['taille'];
    $prestation = $_POST['prestation'];
    $email = $_POST['email'];

    $prix = 0;
    switch ($prestation) {
        case 'Ourlets':
            $prix = 20;
            break;
        case 'Retouches':
            $prix = 30;
            break;
        case 'Ourlets et retouches':
            $prix = 50;
            break;
        default:
            $prix = 0;
    }

    
    $to = $email; 
    $subject = "Devis personnalisé"; 

    $message = "Type de vêtement: $typeVetement\n";
    $message .= "Type de tissu: $typeTissu\n";
    $message .= "Taille: $taille\n";
    $message .= "Prestation choisie: $prestation\n";
    $message .= "Prix estimatif: $prix euros\n";

     mail($to, $subject, $message);

    header("Location:../html/devis.php?message=email envoye avec success") ;


   
?>
