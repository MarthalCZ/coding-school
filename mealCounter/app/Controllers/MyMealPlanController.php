<?php

namespace App\Controllers;

use Core\Auth;
use Core\View;
use App\Utils\Debug;

error_reporting(E_ALL);
ini_set("display_errors", 1);

class MyMealPlanController {
    public function show() {
        // Check if the user is logged in
        if (!Auth::user()) {
            // Redirect unauthenticated users to the login page
            header('Location: /GitHub/coding-school/mealCounter/login');
            exit;
        }
        View::render('my-meal-plan');
    }
}