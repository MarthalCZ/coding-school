<?php

namespace App\Controllers;

use App\Utils\Debug;
use App\Models\User;
use Core\View;

error_reporting(E_ALL);
ini_set("display_errors", 1);

class MyAccountController {
    public function show() {
        $user = [];
        $queryResult = (new User)->all();

        $user = $queryResult[0];
            // Append each row to the $user array with modified values
            $user = [
                'id' => $user['id'],
                'email' => $user['email'],
                'password' => $user['password'],
                'registered' => date('j.n.Y', strtotime($user['registered'])),
                'subscribed' => ($user['subscribed'] == 0) ? "Ne" : "Ano",
                'mode' => ($user['mode']== 0) ? "light" : "dark",
                'language' => ($user['language'] == 0) ? "CZ" : "ENG",
                'units' => ($user['units']== 0) ? "kCal" : "kJ",
                'meals' => $user['meals'],
                'ingredients' => $user['ingredients']
            ];

        // Render the view with the modified $ingredients array
        return View::render('my-account', ['user' => $user]);
    }
}