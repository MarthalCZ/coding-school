<?php

namespace App\Controllers;

use App\Utils\Debug;
use Core\View;

error_reporting(E_ALL);
ini_set("display_errors", 1);

class MealCounterController {
    public function show() {
        View::render('meal-counter');
    }
}