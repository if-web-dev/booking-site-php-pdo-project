<?php

require ("../config/config.constant.php");
require ("../models/Main.model.php");
require ('../models/Customer.model.php');


require ('../models/CustomerManager.model.php');
require ('../models/Booking.model.php');
require ('../models/BookingManager.model.php');

//var_dump('#1');
if (isset($_POST)) {//isset($_POST['hotel_id']) && isset($_POST['submit']) && isset($_POST['date_min']) && isset($_POST['date_min']) && isset($_POST['user_name']) && isset($_POST['user_mail'])) {
//var_dump('#2');
    if(!empty($_POST['hotel_id']) AND !empty($_POST['date_start']) AND !empty($_POST['date_end']) AND !empty($_POST['user_name']) AND !empty($_POST['user_mail'])){
        //var_dump('#3');
        if (strtotime($_POST["date_start"])>=strtotime($_POST["date_end"])) {
            //var_dump('#4');

            $message= "Veuillez selectionner une date de fin posterieure à la date de début";
            echo $message;
    
        }elseif((strtotime($_POST["date_start"])<strtotime("today"))||(strtotime($_POST["date_end"])<strtotime("today"))){
            //var_dump('#5');

            $message= "Veuillez selectionner la date d'aujourd'hui ou posterieur à celle-ci";
            echo $message;

        }else{
           
            //Création de l'object client à partir des inputs
            $client = new Customer($_POST);
            //var_dump($client);
            //echo "<br>";
            //var_dump($_POST);
        
            $manager = new customerManager;
            $_id=$manager->addCustomer($client);//retourne l'array contenant l'id de utilisateur qui reserve
            //var_dump($_id);
           
            $reservation = new Booking($_POST, $_id[0]);//creation de l'objet reservation
            //var_dump($reservation);
            $manager2= new bookingManager;
            
            $message=$manager2->addBooking($reservation);

            echo $message;
         
        }

    }else{
        //var_dump('#7');

        $message= "Veuillez remplir tous les champs (*)";
        echo $message;
       
    }
}