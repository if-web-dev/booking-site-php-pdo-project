<?php

//tuto envoi de mail
//pour utliser la fonction php mail()
//il faut configurer un serveur web
//https://www.it-connect.fr/wamp-envoyer-des-mails-via-php-avec-mail/

//var_dump("#1");
if(isset($_POST['contact_email']) AND isset($_POST['contact_msg']) AND !empty(($_POST['contact_email']) AND !empty(($_POST['contact_msg']))) ){
    //var_dump("#2");
    $dest=$_POST['contact_email'];

    /*Pour les messages de mails les lignes de plus de 70 caractere doivent etre tronqué*/
    $message = $_POST['contact_msg'];
    
    $message = wordwrap($message, 70, "\r\n");

    mail($dest,"Booking site mail subject", $message);

    $msg_sent="Votre message a été envoyé.";

    echo $msg_sent;

}

