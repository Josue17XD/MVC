<?php

use Lib\Route;

Route::get('/', function() {
    echo "Hola desde la página principal";
});

Route::get('/about', function() {
    echo "Hola desde la página acerca de";
});

Route::get('/contact', function() {
    echo "Hola desde la página de contactos";
});

Route::dispatch();