<?php

namespace App\Controllers;

use Core\Auth;
use Core\View;
use App\Models\User;
use App\Utils\Debug;

error_reporting(E_ALL);
ini_set("display_errors", 1);

class MyAccountController {
    public function show() {
        // Check if the user is logged in
        if (!Auth::user()) {
            // Redirect unauthenticated users to the login page
            header('Location: /GitHub/coding-school/mealCounter/login');
            exit;
        }
        
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