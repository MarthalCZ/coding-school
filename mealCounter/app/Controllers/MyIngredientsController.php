<?php

namespace App\Controllers;

use Core\Auth;
use Core\View;
use Core\Session;
use App\Models\User;
use App\Utils\Debug;
use App\Models\Ingredient;

error_reporting(E_ALL);
ini_set("display_errors", 1);

class MyIngredientsController {

    public function show() {
        // Check if the user is logged in
        if (!Auth::user()) {
            // Redirect unauthenticated users to the login page
            header('Location: /GitHub/coding-school/mealCounter/login');
            exit;
        }

        $user = Auth::user();
        
        $ingredients = [];
        $queryResult = (new Ingredient)->all($user);

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
        View::render('my-ingredients', ['ingredients' => $ingredients]);
    }

    public function deleteIngredient() {
        
        // Retrieve user's ingredients
        $user = Auth::user();
        $ingredients = (new Ingredient)->all($user);

         // Retrieve user ID from session
        $user_id = $_SESSION['user_id'];

        // Check if the form is submitted for deletion
        if (isset($_POST['delete'])) {
            // Retrieve ingredient ID from the form data
            $ingredient_id = $_POST['delete'];

            // Instantiate the Ingredient model
            $ingredientModel = new Ingredient();

            // Attempt to delete the ingredient by ID and user ID
            $ingredientModel->delete($ingredient_id, $user_id);
            // Redirect to my-ingredients with success message
            header('Location: /GitHub/coding-school/mealCounter/my-ingredients?success=ingredient-deleted');
        } else {
            // Redirect to my-ingredients with error message
            header('Location: /GitHub/coding-school/mealCounter/my-ingredients?error=ingredient-not-deleted');
        }
    }
}