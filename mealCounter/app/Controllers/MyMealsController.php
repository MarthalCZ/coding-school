<?php

namespace App\Controllers;

use Core\Auth;
use Core\View;
use App\Models\Meal;
use App\Utils\Debug;

error_reporting(E_ALL);
ini_set("display_errors", 1);

class MyMealsController {
    public function show() {
        // Check if the user is logged in
        if (!Auth::user()) {
            // Redirect unauthenticated users to the login page
            header('Location: /GitHub/coding-school/mealCounter/login');
            exit;
        }
        
        $meals = [];
        $queryResult = (new Meal)->all();
        
        foreach ($queryResult as $meal) {
            // Append each row to the $meals array with roundedmodified values
            $meals[] = [
                'id' => $meal['id'],
                'name' => $meal['name'],
                'weight' => round($meal['weight']),
                'energy' => round($meal['energy'])
                ];
            }

        // Render the view with the modified $meals array
        return View::render('my-meals', ['meals' => $meals]);
    }
}