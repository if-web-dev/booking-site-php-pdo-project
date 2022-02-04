<?php

if (isset($_POST['submit'])) {//isset($_POST['hotel_id']) && isset($_POST['submit']) && isset($_POST['date_min']) && isset($_POST['date_min']) && isset($_POST['user_name']) && isset($_POST['user_mail'])) {

    if(!empty($_POST['hotel_id']) AND !empty($_POST['submit']) AND !empty($_POST['date_start']) AND !empty($_POST['date_end']) AND !empty($_POST['user_name']) AND !empty($_POST['user_mail'])){

        if (strtotime($_POST["date_start"])>=strtotime($_POST["date_end"])) {

            $message= "Veuillez selectionner une date de fin posterieure à la date de début";
    
        }elseif((strtotime($_POST["date_start"])<strtotime("today"))||(strtotime($_POST["date_end"])<strtotime("today"))){

            $message= "Veuillez selectionner la date d'aujourd'hui ou posterieur à celle-ci";

        }else{
            //Création de l'object client à partir des inputs
            $client = new Customer($_POST);
            //var_dump($client);
        
            $manager = new customerManager;
            $_id=$manager->addCustomer($client);//retourne l'array contenant l'id de utilisateur qui reserve
            //var_dump($_id);
            //echo $_id[0];
            $reservation = new Booking($_POST, $_id[0]);//creation de l'objet reservation
            //var_dump($reservation);
            $manager2= new bookingManager;
            
            $message=$manager2->addBooking($reservation);
        }

    }else{

        $message= "Veuillez remplir tous les champs (*)";
    }
}