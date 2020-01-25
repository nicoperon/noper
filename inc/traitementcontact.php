<?php
// après soumission du formulaire, on récupérer les valeurs du formulaire
if (isset($_POST['valideform'])) {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $sujet = $_POST['sujet'];
    $tel = $_POST['tel']
    $message = $_POST['message'];

    // on envoie le mail a cette adresse
    $mail_to = 'la-raie-creation@noperweb.fr';

    // on prépare le mail
    $headers .= "From: La Raie-Creation\r\n";
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";

    $subject = 'Nouveau message : ' . $nompage ;
    $body_message = 
    "Vous avez reçu un nouveau message depuis le site La Raie Création : <br><br>" .
    "Voici les détails du message :". "<br><br>" .
    "Nom : ".$nom. "<br>" .
    "Email : ".$email. "<br>" .
    "Téléphone : ".$tel. "<br>" .
    "Sujet : ".$sujet. "<br>" .
    "Message : ".$message;
    
    mail($mail_to, $subject, $body_message, $headers);
    
    // on redirige a cette adresse : 
    header('Location: https://la-raie-creation.noperweb.fr/');
}
