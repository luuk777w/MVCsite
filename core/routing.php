<?php

namespace Core;

Use App\routes;

class Routing
{

    function GetMC($route){

        if($route == null){
            return ["HomeController", "Index"];
        }

        $routes = routes::$routes;

        foreach ($routes as $key => $value){

            if($route == $key){
                return $value;
            }

        }

        return ["ErrorController", "error404"];
    }

}