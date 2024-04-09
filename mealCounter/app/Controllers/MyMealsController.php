<?php

namespace App\Controllers;

use App\Utils\Debug;
use App\Models\Meal;
use Core\View;

error_reporting(E_ALL);
ini_set("display_errors", 1);

class MyMealsController {
    public function show() {
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