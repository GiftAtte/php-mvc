<?php

namespace Core;
use Core\Request;
class Router
{
    protected static $routes = [];

    // Register a GET route
    public static function get($uri, $action)
    {

        
        self::$routes['GET'][trim($uri, '/')] = $action;
    }

    // Register a POST route
    public static function post($uri, $action)
    {
        self::$routes['POST'][trim($uri, '/')] = $action;
    }

    // Resolve the current request
    public function resolve()
    {
      //  echo json_encode($action);
        $method = Request::Method();
           $uri = Request::Route();

        if (isset(self::$routes[$method][$uri])) {
            $action = self::$routes[$method][$uri];
            if (is_array($action)) {
                [$controller, $method] = $action;
                $controller = new $controller;
                $controller->$method();
            } else {
                call_user_func($action);
            }
        } else {
            http_response_code(404);
            echo "Page Not Found";
        }
    }
}
