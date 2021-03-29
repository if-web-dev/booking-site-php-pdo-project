<?php

$today = date('Y-m-d');
$dbh = new PDO('mysql:host=localhost;dbname=hotel', 'root', '');


$sql ="SELECT id, hotel_nom FROM hotel";
$stmt=$dbh->query($sql);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST['hotel_id']) && isset($_POST['submit']) && isset($_POST['date_min']) && isset($_POST['date_min']) && isset($_POST['user_name']) && isset($_POST['user_mail'])) {

    if(!empty($_POST['hotel_id']) AND !empty($_POST['submit']) AND !empty($_POST['date_min']) AND !empty($_POST['date_max']) AND !empty($_POST['user_name']) AND !empty($_POST['user_mail'])){

        if (strtotime($_POST['date_min'])>=strtotime($_POST['date_max'])) {

            $message= "Veuillez selectionner une date de fin posterieure à la date de début";
    
        }else{
            //Création de l'object client à partir des inputs
            $client = new Client($_POST);
            //var_dump($client);
            //echo "<br>";
            $manager = new clientManager($dbh);
            $_id=$manager->addClient($client);//retourne l'array contenant l'id de utilisateur qui reserve
            //var_dump($_id);
            //echo $_id[0];
            $reservation = new Reservation($_POST, $_id[0]);//creation de l'objet reservation
            //var_dump($reservation);
            $manager2= new reservationManager ($dbh);
            
            $message=$manager2->addReservation($reservation);
        }

    }else{

        $message= "Veuillez remplir tous les champs (*)";
    }
}