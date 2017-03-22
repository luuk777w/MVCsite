<?php

namespace Core;

require "./vendor/autoload.php";

class App
{

    function start()
    {
        $MC = new Routing();
        $MCArray = $MC->GetMC($_GET['r']);

        $getController = $MCArray[0];
        $method = $MCArray[1];

        $prepareController = "\\App\\Controllers\\".$getController;
        $controller = new $prepareController();

        $parameters = $_GET['p'];

        return $controller->$method();

    }

}