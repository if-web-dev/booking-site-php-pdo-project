<?php

//tuto envoi de mail
//pour utliser la fonction php mail()
//il faut configurer un serveur web en local
//https://www.it-connect.fr/wamp-envoyer-des-mails-via-php-avec-mail/


if (isset($_POST['submit'])) {

    if (isset($_POST['contact_email']) and isset($_POST['contact_msg']) and !empty(($_POST['contact_email']) and !empty(($_POST['contact_msg'])))) {

        $destinataire = $_POST['contact_email'];
        // Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
        $expediteur = 'booking-site@mon-test.fr'; // CHANGER VOTRE BOITE MAIL
        $message = 'Bonjour ' . $_POST['contact_name'] . "\n" . 'Voici votre message : ' . $_POST['contact_msg'];
        $objet = 'Message de confirmation'; // Objet du message
        $headers = 'MIME-Version: 1.0' . "\n"; // Version MIME
        $headers .= 'Reply-To:i.fouhal@hotmail.com ' . "\n"; // Mail de réponse
        $headers .= 'From: "booking-site"<' . $expediteur . '>' . "\n"; // Expediteur
        $headers .= 'Delivered-to: ' . $destinataire . "\n"; // Destinataire


        if (mail($destinataire, $objet, $message, $headers, '-f' . $expediteur)) // Envoi du message
        {
            echo 'Votre message a bien été envoyé ';

        } else {// Non envoyé
        
            echo "Votre message n'a pas pu être envoyé";
        }
        
    } else {

        echo "Veuillez remplir tous les espaces.";
    }
}
