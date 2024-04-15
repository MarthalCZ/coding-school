<?php

namespace App\Controllers;

use Core\View;
use App\Utils\Debug;

error_reporting(E_ALL);
ini_set("display_errors", 1);

class AboutAuthorController {
    
    public function show() {
        // Render the about author view
        View::render('about-author');
    }
}