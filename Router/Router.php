<?php

namespace Router;

use contollers\MainController;
use Exceptions\RouteNotFoundException;

class Router {

    public function run(string $uri, array $routes)
    {
        $path = explode("?", $uri)[0];

        if(array_key_exists($path, $routes))
        {
            $routeMethod = $routes[$path];
            $mainController = new MainController();
            echo $mainController->$routeMethod();

        }else{

            throw new RouteNotFoundException();
        }
    }
}
