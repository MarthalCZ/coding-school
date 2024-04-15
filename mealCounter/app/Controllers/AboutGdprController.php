<?php

namespace App\Controllers;

use Core\View;
use App\Utils\Debug;

error_reporting(E_ALL);
ini_set("display_errors", 1);

class AboutGdprController {
    
    public function show() {
        // Render the about gdpr view
        View::render('about-gdpr');
    }
}