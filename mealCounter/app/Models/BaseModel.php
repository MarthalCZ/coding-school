<?php

namespace App\Models;

use Core\Database;

class BaseModel {
    protected $database;

    public function __construct() {
        $this->database = new Database();    
    }
}
