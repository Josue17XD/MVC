<?php

namespace Lib;



class Route {

    public static function get($route, $callback) {
        $uri = $_SERVER['REQUEST_URI'];

        if (strpos($route, ':') !== false) {
            $route = preg_replace('#:[a-zA-Z0-9]+#', '([a-zA-Z0-9]+)', $route);
        }

        $routeRegex = "#^" . $route . "$#";

        if (preg_match($routeRegex, $uri, $matches)) {
            $params = array_slice($matches, 1);

         
            if (is_callable($callback)) {
                $response = $callback(...$params);
            }

         
            if (is_array($callback)) {
                
                $controller = new $callback[0];
                
                $response = $controller->{$callback[1]}(...$params);
            }

            // Procesar y mostrar la respuesta obtenida
            if (is_array($response) || is_object($response)) {
                header('Content-Type: application/json');
                echo json_encode($response);
            } else {
                echo $response;
            }

            exit;
        }
    }
}