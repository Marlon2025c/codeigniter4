<?php

namespace App\Controllers;

class Home extends BaseController
    {
    public function index(): string
        {
            $db = \Config\Database::connect();
            if ($db->connID) {
                echo "Connexion réussie !";
            } else {
                echo "Connexion échouée !";
            }
            
            return view('login');
        }

    public function welcome(): string
        {
            return view('welcome_message');
        }
     }