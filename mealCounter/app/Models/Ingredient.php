<?php

namespace App\Models;

class Ingredient extends BaseModel {
    public function all() {  
        return $this->database->executeQuery('SELECT * FROM ingredients');
    }
}