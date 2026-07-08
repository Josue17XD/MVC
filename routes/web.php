<?php

use Lib\Route;

Route::get('/', function() {
    return [
        'title' => 'Home',
        'content' => 'Hola desde la página principal'
    ];
});

Route::get('/about', function() {
    echo "Hola desde la página acerca de";
});

Route::get('/contact', function() {
    echo "Hola desde la página de contactos";
});

Route::get('/courses/prueba', function() {
    return "Hola desde la página cursos de prueba";
});

Route::get('/courses/:slug', function($slug) {
    return "El curso es: " . $slug;
});


echo "404 Not Found";

Route::dispatch();