<?php

namespace App\Controllers;

use Core\Auth;
use Core\View;
use App\Models\User;
use App\Utils\Debug;
use App\Models\Macro;
use App\Utils\Helpers;
use App\Models\Ingredient;

error_reporting(E_ALL);
ini_set("display_errors", 1);

class IngredientCounterController {
    
    public function show() {
        // Check if the user is logged in
        if (!Auth::user()) {
            // Redirect unauthenticated users to the login page
            header('Location: /GitHub/coding-school/mealCounter/login');
            exit;
        }

        $user = Auth::user();

        $localization = Helpers::getLocalization();
        
        $macros = [];
        $queryResult = (new Macro)->all($user);

        foreach ($queryResult as $macro) {
            // Initialize the name value as the macro's name by default
            $name = $macro['name'];

            // Check if the name exists in the $localization array
            if (isset($localization[$macro['name']])) {
                // If a localized name exists, use it instead of the default name
                $name = $localization[$macro['name']];
            }

            // Append each row to the macros array with modified values
            $macros[] = [
                'id' => $macro['id'],
                'name' => $name, // Use the localized name if available
                'value' => $macro['value'],
            ];
        }
        // Render the ingredient-counter view passing macro data
        View::render('ingredient-counter', ['macros' => $macros]);
    }

    public function create() {
        $user_id = $_SESSION['user_id'];
        // Check if ingredient name was submitted
        if (isset($_POST['name'])) {
            // Create ingredient array from submitted data
            $ingredient = [
                'name' => $_POST['name'],
                'energy' => $_POST['energy'],
                'protein' => $_POST['ratio-1'],
                'carbs' => $_POST['ratio-2'],
                'fat' => $_POST['ratio-3'],
                'fiber' => $_POST['ratio-4'],
                'alcohol' => $_POST['ratio-5'],
                'user_id' => $_SESSION['user_id']
            ];
            // Call ingredient model to create new ingredient object
            $ingredientModel = new Ingredient();
            // Call the create method to insert new ingredient
            $ingredientModel->create($ingredient);
            // Update number of user's ingredients in DB
            $ingredients = (new Ingredient)->all($user_id);
            $value = count($ingredients);
            $userModel = new User();
            $userModel->updateIngredientCount($user_id, $value);
            // Redirect to ingredient counter with success message
            return header('Location: /GitHub/coding-school/mealCounter/ingredient-counter?success=ingredient-created');
        } else {
            // Redirect to ingredient counter with error message
            return header('Location: /GitHub/coding-school/mealCounter/ingredient-counter?error=ingredient-created');
        }
    }
}