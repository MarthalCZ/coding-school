<?php

namespace App\Models;

class Meal extends BaseModel {
    public function all() {  
        return $this->database->executeQuery('SELECT * FROM meals');
    }
}