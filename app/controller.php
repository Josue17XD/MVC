<?php


namespace App\Controllers;

class Controller {

    public function view($route, $data = []) {
        $route = str_replace('.', '/', $route);

        if (file_exists("../resources/views/{$route}.php")) {
            extract($data);

            ob_start();
            include "../resources/views/{$route}.php";
            $content = ob_get_clean();
            return $content;
        }

        return "El archivo no existe";
    }
}