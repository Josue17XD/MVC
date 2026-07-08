<?php

namespace App\Controllers;

use App\Models\Contact;

class HomeController extends Controller {

    public function index() {
        $contactModel = new Contact();

        $updatedContact = $contactModel->update(12, [
            'name' => 'Juan Pérez 2',
            'email' => 'juan@gmail.com',
            'phone' => '123456789'
        ]);

        return $this->view('home', [
            'title' => 'Home',
            'description' => 'Esta es la página home'
        ]);
    }
}