<?php

namespace App\Controllers;

use App\Utils\Debug;
use App\Models\Ingredient;
use Core\View;

error_reporting(E_ALL);
ini_set("display_errors", 1);

class MyIngredientsController {
    public function show() {
        $ingredients = [];
        $queryResult = (new Ingredient)->all();

        foreach ($queryResult as $ingredient) {
            // Append each row to the $ingredients array with modified values
            $ingredients[] = [
                'id' => $ingredient['id'],
                'name' => $ingredient['name'],
                'weight' => round($ingredient['weight']),
                'energy' => round($ingredient['energy']),
                'protein' => round($ingredient['protein']),
                'carbs' => round($ingredient['carbs']),
                'fat' => round($ingredient['fat']),
                'fiber' => round($ingredient['fiber']),
                'alcohol' => round($ingredient['alcohol']),
                'user_id' => $ingredient['user_id']
            ];
        }
        // Render the view with the modified $ingredients array
        return View::render('my-ingredients', ['ingredients' => $ingredients]);
    }
}
    