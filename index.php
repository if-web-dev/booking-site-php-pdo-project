<?php

require_once ('./config/config.constant.php');

require_once ('./models/Customer.model.php');
require_once ('./models/GetHotelData.model.php');
require_once ('./models/CustomerManager.model.php');
require_once ('./models/Booking.model.php');
require_once ('./models/BookingManager.model.php');


require_once("./controllers/main.controller.php");

$mainController = new MainController();

try {

    if(empty($_GET['page'])){
        $page = "accueil";
        
    } else {
        $url = explode("/", filter_var($_GET['page'],FILTER_SANITIZE_URL));
        $page = $url[0];
    }

    switch($page){
        case "accueil" : $mainController->home();
        break;
        case "hotels" : $mainController->hotels();
        break;
        case "contacts": $mainController->contacts();
        break;
        default : 
        throw new Exception("La page n'existe pas");
        
    }
} catch (Exception $e){
    $mainController->pageErreur($e->getMessage());
}