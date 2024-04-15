<?php

use Core\Router;

use App\Controllers\LoginController;
use App\Controllers\HeaderController;
use App\Controllers\MyMealsController;
use App\Controllers\RegisterController;
use App\Controllers\AboutGdprController;
use App\Controllers\MyAccountController;
use App\Controllers\MyMealPlanController;
use App\Controllers\AboutAuthorController;
use App\Controllers\MealCounterController;
use App\Controllers\MyIngredientsController;
use App\Controllers\IngredientCounterController;

$router = new Router();

$router->addRoute('/GitHub/coding-school/mealCounter/register', RegisterController::class, 'show', 'GET');
$router->addRoute('/GitHub/coding-school/mealCounter/register', RegisterController::class, 'create', 'POST');

$router->addRoute('/GitHub/coding-school/mealCounter/login', LoginController::class, 'show', 'GET');
$router->addRoute('/GitHub/coding-school/mealCounter/login', LoginController::class, 'create', 'POST');

$router->addRoute('/GitHub/coding-school/mealCounter/logout', LoginController::class, 'logout', 'GET');

$router->addRoute("/GitHub/coding-school/mealCounter/change-mode", HeaderController::class, 'changeMode', 'POST');
$router->addRoute("/GitHub/coding-school/mealCounter/change-language", HeaderController::class, 'changeLanguage', 'POST');

$router->addRoute('/GitHub/coding-school/mealCounter/my-account', MyAccountController::class, 'show', 'GET');
$router->addRoute('/GitHub/coding-school/mealCounter/my-account/change-email', MyAccountController::class, 'changeEmail', 'POST');
$router->addRoute('/GitHub/coding-school/mealCounter/my-account/change-password', MyAccountController::class, 'changePassword', 'POST');
$router->addRoute('/GitHub/coding-school/mealCounter/my-account/change-subscription', MyAccountController::class, 'changeSubscription', 'POST');
$router->addRoute('/GitHub/coding-school/mealCounter/my-account/change-units', MyAccountController::class, 'changeUnits', 'POST');
$router->addRoute('/GitHub/coding-school/mealCounter/my-account/delete-account', MyAccountController::class, 'removeAccount', 'POST');

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

$router->addRoute('/GitHub/coding-school/mealCounter/about-gdpr', AboutGdprController::class, 'show', 'GET');
$router->addRoute('/GitHub/coding-school/mealCounter/about-gdpr', AboutGdprController::class, 'show', 'POST');

$router->addRoute('/GitHub/coding-school/mealCounter/about-author', AboutAuthorController::class, 'show', 'GET');
$router->addRoute('/GitHub/coding-school/mealCounter/about-author', AboutAuthorController::class, 'show', 'POST');

$router->run();
