<?php

namespace App\Models;

class Macro extends BaseModel {
    public function all() {
        // Prepare the SQL query to select ingredients for a specific user_id
        $sql = "SELECT * FROM macros";

        // Execute the query with the provided user_id as a parameter
        return $this->database->executeQuery($sql);
    }
}