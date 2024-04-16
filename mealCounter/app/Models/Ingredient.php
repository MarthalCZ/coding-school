<?php

namespace App\Models;

class Ingredient extends BaseModel {
    public function all(int|null $user_id) {
        // Prepare the SQL query to select ingredients for a specific user_id
        $sql = "SELECT * FROM ingredients WHERE user_id = '$user_id'";

        // Execute the query with the provided user_id as a parameter
        return $this->database->executeQuery($sql, [$user_id]);
    }

    public function create(array $ingredient) {
        // Extract data from ingredient array
        $name = $ingredient['name'];
        $energy = $ingredient['energy'];
        $protein = $ingredient['protein'];
        $carbs = $ingredient['carbs'];
        $fat = $ingredient['fat'];
        $fiber = $ingredient['fiber'];
        $alcohol = $ingredient['alcohol'];
        $user_id = $ingredient['user_id'];
        // Prepare the SQL query for inserting a new ingredient
        $sql = "INSERT INTO ingredients (name, energy, protein, carbs, fat, fiber, alcohol, user_id) 
                VALUES ('$name', '$energy', '$protein', '$carbs', '$fat', '$fiber', '$alcohol', '$user_id')";

        // Execute the SQL query with the ingredient array as parameters
        $this->database->executeQuery($sql, $ingredient);
    }

    public function delete(int $ingredient_id, int $user_id) {
        // Prepare the SQL query to delete the ingredient
        $sql = "DELETE FROM ingredients WHERE id = $ingredient_id AND user_id = $user_id";
        // Execute the SQL query
        $this->database->executeQuery($sql);
    }
}