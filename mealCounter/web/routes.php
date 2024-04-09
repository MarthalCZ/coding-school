<?php

use Core\Router;

use App\Controllers\LoginController;
use App\Controllers\RegisterController;
use App\Controllers\MyAccountController;
use App\Controllers\MyMealPlanController;
use App\Controllers\MyMealsController;
use App\Controllers\MyIngredientsController;
use App\Controllers\MealCounterController;
use App\Controllers\IngredientCounterController;

$router = new Router();

$router->addRoute('/GitHub/coding-school/mealCounter/login', LoginController::class, 'show', 'GET');
$router->addRoute('/GitHub/coding-school/mealCounter/login', LoginController::class, 'show', 'POST');

$router->addRoute('/GitHub/coding-school/mealCounter/register', RegisterController::class, 'show', 'GET');
$router->addRoute('/GitHub/coding-school/mealCounter/register', RegisterController::class, 'show', 'POST');

$router->addRoute('/GitHub/coding-school/mealCounter/my-account', MyAccountController::class, 'show', 'GET');
$router->addRoute('/GitHub/coding-school/mealCounter/my-account', MyAccountController::class, 'show', 'POST');

$router->addRoute('/GitHub/coding-school/mealCounter/my-meal-plan', MyMealPlanController::class, 'show', 'GET');
$router->addRoute('/GitHub/coding-school/mealCounter/my-meal-plan', MyMealPlanController::class, 'show', 'POST');

$router->addRoute('/GitHub/coding-school/mealCounter/my-meals', MyMealsController::class, 'show', 'GET');
$router->addRoute('/GitHub/coding-school/mealCounter/my-meals', MyMealsController::class, 'show', 'POST');

$router->addRoute('/GitHub/coding-school/mealCounter/my-ingredients', MyIngredientsController::class, 'show', 'GET');
$router->addRoute('/GitHub/coding-school/mealCounter/my-ingredients', MyIngredientsController::class, 'show', 'POST');

$router->addRoute('/GitHub/coding-school/mealCounter/meal-counter', MealCounterController::class, 'show', 'GET');
$router->addRoute('/GitHub/coding-school/mealCounter/meal-counter', MealCounterController::class, 'show', 'POST');

$router->addRoute('/GitHub/coding-school/mealCounter/ingredient-counter', IngredientCounterController::class, 'show', 'GET');
$router->addRoute('/GitHub/coding-school/mealCounter/ingredient-counter', IngredientCounterController::class, 'show', 'POST');

$router->run();
