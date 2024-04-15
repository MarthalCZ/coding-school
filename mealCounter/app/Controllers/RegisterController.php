<?php

namespace App\Controllers;

use Core\Auth;
use Core\View;
use App\Models\User;
use App\Utils\Debug;

error_reporting(E_ALL);
ini_set("display_errors", 1);

class RegisterController {
    
    public function show() {
        // Check if the user is not logged in
        if (Auth::user()) {
            // Redirect authenticated users to the dashboard page
            header('Location: /GitHub/coding-school/mealCounter/my-meal-plan');
            exit;
        }
        // Render the register view
        View::render('register');
    }

    public function create() {
        // Attempt to create a new user with data obtained from POST
        if ((new User)->create($_POST)) {
            // If user creation is successful, log in the user
            $user_id = (new User)->findByEmail($_POST['email'])['id'];
            Auth::login($user_id);
            // Redirect to the my-meals page upon successful registration and login
            header('Location: /GitHub/coding-school/mealCounter/my-meal-plan');
            // Stop script execution after redirection
            exit;
        } else {
            // If user creation fails (e.g., email already taken), redirect back to the registration page with an error
            header('Location: /GitHub/coding-school/mealCounter/register?error=email_taken');
            // Stop script execution after redirection
            exit;
        }
    }
}