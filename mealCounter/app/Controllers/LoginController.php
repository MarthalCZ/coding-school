<?php

namespace App\Controllers;

use Core\Auth;
use Core\View;
use App\Models\User;
use App\Utils\Debug;

error_reporting(E_ALL);
ini_set("display_errors", 1);

class LoginController {
    
    public function show() {
        // Check if the user is not logged in
        if (Auth::user()) {
            // Redirect authenticated users to the dashboard page
            header('Location: /GitHub/coding-school/mealCounter/my-meal-plan');
            exit;
        }
        // Render the login view
        View::render('login');
    }

    public function create() {
        // Check if both email and password are provided in the POST request
        if (!isset($_POST['email']) || empty($_POST['email']) || !isset($_POST['password']) || empty($_POST['password'])) {
        // Redirect with an error if either email or password is missing or empty
        return header('location: /GitHub/coding-school/mealCounter/login?error=missing_credentials');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];

        // Check if the user with the provided email exists
        $user = (new User)->findByEmail($email);

        if (!$user) {
            // Redirect with an error if user not found
            return header('location: /GitHub/coding-school/mealCounter/login?error=user_not_found');
        }

        // Verify the password against the stored hashed password
        if (password_verify($password, $user['password'])) {
            // Login the user (set user ID in the session)
            Auth::login($user['id']);

            // Redirect to the dashboard upon successful login
            return header('location: /GitHub/coding-school/mealCounter/my-meal-plan');
        } else {
            // Redirect with an error if password is incorrect
            return header('location: /GitHub/coding-school/mealCounter/login?error=wrong_credentials');
        }
    }

    /**
     * This function logs out current user and redirects back to login
     * 
     * @return void
     */
    public function logout() {
        // Perform logout (clear user ID from the session)
        Auth::logout();
        // Redirect to the login page after logout
        return header('location: /GitHub/coding-school/mealCounter/login');
    }
}