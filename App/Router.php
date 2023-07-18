<?php

namespace App;
use App\Exceptions\RouterNotFoundException;

class Router
{
    private array $routes;

    public function register(string $route, callable $action): self
    {
        $this->routes[$route] = $action;
        return $this;
    }    

    public function resolve(string $requestUri)
    {
        $route = explode('?', $requestUri[0]);
        $action = $this->routes[$routes] ?? null;

        if(!$action)
        {
            throw new RouteNotFoundException();
        }

        call_user_func($action);
    }
}