<?php

namespace app;

interface routerInterface
{
    public function addRoute(string $method, string $uri, $target);

    public function routeTo(string $uri);

    //function to have a route with a GET request
    public function get($uri, $target);

    //function to have a route with a POST request
    public function post($uri, $target);

    public function back();
}
