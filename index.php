<?php

require_once __DIR__ . '/..vendor/autoload.php';

echo '<prev>';
print_r($_SERVER);
echo '<prev>';

//router class with a method to intiate the route

$router = new App\Router();

$router->register('/', function()
{
    echo 'Home';
});

$router->register('/', function()
{
    echo 'Invoices';
});

echo $router->resolve($_SERVER['REQUEST_URI']);