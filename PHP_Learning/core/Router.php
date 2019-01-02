<?php
/**
 * Created by PhpStorm.
 * User: zlatko
 * Date: 12/20/18
 * Time: 7:58 PM
 */

class Router
{

    protected $routes = [
        'GET' => [],
        'POST' => []
    ];



    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }



//    public function define($routes)
//    {
//        $this->routes=$routes;
//    }



    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }



    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }


    public function direct($uri, $requestType)
    {
        //die(var_dump($requestType));
        if (array_key_exists($uri, $this->routes[$requestType]))
        {
            return $this->callAction(...explode('@', $this->routes[$requestType][$uri]));
            //return $this->routes[$requestType][$uri];
        }

        throw new Exception('No route defined for this URI');
    }






    protected function callAction($controller, $action)
    {
        $controller = new $controller;

        if (! method_exists($controller, $action))
        {
            throw new Exception("{$controller} does not respond to the {$action} action.");
        }

        return $controller->$action();

        //return(new $controller)->$action();
    }




}