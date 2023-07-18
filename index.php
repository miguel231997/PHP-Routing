<?php

require_once __DIR__ . '/..vendor/autoload.php';

echo '<prev>';
print_r($_SERVER);
echo '<prev>';

//router class with a method to intiate the route

$router = new App\Router();

$router
    ->get('/', [App\Classes\Home::class, 'index'])
    ->get('/invoices', [App\Classes\Invoices::class, 'index'])
    ->get('/invoices/create', [App\Classes\Invoices::class, 'create'])
    ->post('/invoices/create', [App\Classes\Invoices::class, 'create']);



echo $router->resolve($_SERVER['REQUEST_URI']);