<?php

namespace App\Models;

class User extends BaseModel {
    public function all() {  
        return $this->database->executeQuery('SELECT * FROM users WHERE id = 0001');
    }
}