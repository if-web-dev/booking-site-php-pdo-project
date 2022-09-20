<?php

require_once ('./config/config.constant.php');
require_once ('./config/config.routes.php');
require_once ('./models/GetHotelData.model.php');
require_once ('./Router/Router.php');
require_once('./controllers/MainController.php');
require_once ('./Exceptions/RouteNotFoundException.php');


/*try {

    if(empty($_GET['page'])){
        $page = 'accueil';
        
    } else {
        $url = explode("/", filter_var($_GET['page'],FILTER_SANITIZE_URL));
        $page = $url[0];/*un seul niveau de page sera traité dans l'arborescence des page*/ 
    //}

   //* switch($page){
       // case 'accueil' : $mainController->home();
            /*switch($url[1]) si page de second niveau*/
         //   break;
       // case 'hotels' : $mainController->hotels();
       //     break;
      //  case 'contacts': $mainController->contacts();
      //      break;
     //   default : 
     //       throw new Exception('La page n\'existe pas');
  //  }
//} catch (Exception $e){
    //$mainController->pageErreur($e->getMessage()); /*gere l'erreur 404: page inexistante */
//}

use contollers\MainController;
use Router\Router;
use Exceptions\RouteNotFoundException;


$router = new Router();
$mainController = new MainController();

try {
    
    $router->run($_SERVER["REQUEST_URI"], $routes);
}
catch(RouteNotFoundException $e) {

    $mainController->pageErreur($e->getMessage());
}