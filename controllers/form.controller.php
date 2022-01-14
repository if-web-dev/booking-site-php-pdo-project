<?php

require_once ('./models/Client.model.php');
require_once ('./models/GetHotelData.model.php');
require_once ('./models/ClientManager.model.php');
require_once ('./models/Reservation.model.php');
require_once ('./models/ReservationManager.model.php');



if (isset($_POST['hotel_id']) && isset($_POST['submit']) && isset($_POST['date_min']) && isset($_POST['date_min']) && isset($_POST['user_name']) && isset($_POST['user_mail'])) {

    if(!empty($_POST['hotel_id']) AND !empty($_POST['submit']) AND !empty($_POST['date_min']) AND !empty($_POST['date_max']) AND !empty($_POST['user_name']) AND !empty($_POST['user_mail'])){

        if (strtotime($_POST['date_min'])>=strtotime($_POST['date_max'])) {

            $message= "Veuillez selectionner une date de fin posterieure à la date de début";
    
        }elseif((strtotime($_POST['date_min']) OR strtotime($_POST['date_max'])) <= strtotime("today")){

            $message= "Veuillez selectionner la date d'aujourd'hui ou posterieur à celle-ci";

        }else{
            //Création de l'object client à partir des inputs
            $client = new Client($_POST);
            //var_dump($client);
        
            $manager = new clientManager;
            $_id=$manager->addClient($client);//retourne l'array contenant l'id de utilisateur qui reserve
            //var_dump($_id);
            //echo $_id[0];
            $reservation = new Reservation($_POST, $_id[0]);//creation de l'objet reservation
            //var_dump($reservation);
            $manager2= new reservationManager;
            
            $message=$manager2->addReservation($reservation);
        }

    }else{

        $message= "Veuillez remplir tous les champs (*)";
    }
}