<?php
require_once("./models/GetHotelData.model.php");

class MainController{
    
    // a revoir !!!!!
    private $mainManager;

    public function __construct(){

        $this->mainManager = new getHotelDatas();
    }
    // a revoir !!!

    private function generatePage($data){
        extract($data);
        ob_start();
        require_once($view);
        $page_content = ob_get_clean();
        require_once($template);
    }

    //Propriété "page_css" : tableau permettant d'ajouter des fichiers CSS spécifiques
    //Propriété "page_javascript" : tableau permettant d'ajouter des fichiers JavaScript spécifiques

    public function home(){

        $data_page = [
            "page_description" => "Description de la page d'accueil",
            "page_title" => "Accueil",
            "view" => "views/home.view.php",
            "template" => "views/common/template.view.php"
        ];
        $this->generatePage($data_page);
    }

    public function hotels(){

        $data_page = [
            "page_description" => "liste d'hotel",
            "page_title" => "Les hotels",
            "view" => "views/hotels.view.php",
            "page_css" => "hotel.css",
            "template" => "views/common/template.view.php"
        ];
        $this->generatePage($data_page);
    }

    public function contacts(){

        $data_page = [
            "page_description" => "Page de contacts",
            "page_title" => "Contacts",
            "view" => "views/contacts.view.php",
            "page_css" => "contacts.css",
            "template" => "views/common/template.view.php"
        ];
        $this->generatePage($data_page);
    }

    public function pageErreur($msg){
        $data_page = [
            "page_description" => "Page permettant de gérer les erreurs",
            "page_title" => "Page d'erreur",
            "msg" => $msg,
            "view" => "./views/error.view.php",
            "template" => "views/common/template.view.php"
        ];
        $this->generatePage($data_page);
    }
}