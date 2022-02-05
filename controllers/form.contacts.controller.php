<?php

//tuto envoi de mail
//pour utliser la fonction php mail()
//il faut configurer un serveur web
//https://www.it-connect.fr/wamp-envoyer-des-mails-via-php-avec-mail/

if(isset($_POST['contact_email']) AND isset($_POST['contact_msg']) AND !empty(($_POST['contact_email']) AND !empty(($_POST['contact_msg']))) ){

    $dest=$_POST['contact_email'];
    echo $dest;

    /*Pour les messages de mails les lignes de plus de 70 caractere doivent etre tronqué*/
    $message = $_POST['contact_msg'];
    
    $message = wordwrap($message, 70, "\r\n");
    echo $message;

    mail($dest,"Booking site mail subject", $message);

    $msg_sent="Votre message a été envoyé.";

}

