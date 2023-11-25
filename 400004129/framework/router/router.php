<?php

namespace app;

require_once 'routerInterface.php';

class Router implements routerInterface
{
    //mapping uri a user enters to file
    private $routes = [];

    public function addRoute(string $method, string $uri, $target)
    {
        $this->routes[] = [
            'uri' => $uri,
            'method' => $method,
            'target' => $target
        ];
    }

    //add GET request when adding route to array  
    public function get($uri, $target)
    {
        $this->addRoute('GET', $uri, $target);
    }

    //add POST request when adding route to array  
    public function post($uri, $target)
    {
        $this->addRoute('POST', $uri, $target);
    }

    public function routeTo(string $uri)
    {
        //loop through array, asking if a uri key in array matches the one entered
        //if so, require the target matching the uri key in array
        if ($uri == '/400004129_htdocs/index.php') {
            require '/xampp/400004129/app/views/landing.php';
        } else {
            foreach ($this->routes as $route) {
                if ($route['uri'] === $uri) {
                    require $route['target'];
                }
            }
        }
    }

    public function back()
    {
        header('Location:' . $_SERVER['HTTP_REFERER']); //back to previous page
    }
}
