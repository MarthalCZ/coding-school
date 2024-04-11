<?php

namespace App\Models;

use App\Utils\Debug;

error_reporting(E_ALL);
ini_set("display_errors", 1);

class User extends BaseModel {
    // Retrieve all users from the database
    public function all() {  
        return $this->database->executeQuery('SELECT * FROM users');
    }

    // Create a new user with the provided data
    public function create($data) {
        // Hash the password using the PASSWORD_DEFAULT algorithm
        $data['password'] =  password_hash($data['password'], PASSWORD_DEFAULT);
        // Check if the user already exists based on the email address
        if ($this->exists($data['email'])) {
            // If user already exists, return false
            return false;
            // Stop script execution
            die();
        }    

        // Prepare the SQL query for inserting a new user
        $sql = "INSERT INTO users (email, password) VALUES ('" . $data['email'] . "', '" . $data['password'] . "')";
        // Execute the SQL query to insert the new user into the database
        $this->database->executeQuery($sql);
         // If user creation successful, return true
        return true;
    }

    // Find a user by their email address
    public function findByEmail($email)
    {
        // Prepare the SQL query for filtering matching email
        $sql = "SELECT * FROM users WHERE email = '$email'";
        // Return the first result (assuming there's only one matching user)
        return $this->database->executeQuery($sql)[0];
    }

    // Check if a user with the specified email address exists
    public function exists(string $email)
    {
        // Prepare the SQL query for filtering matching email
        $sql = "SELECT email FROM users WHERE email = '$email'";    

        // Count the number of rows returned by the SQL query
        if (count($this->database->executeQuery($sql)) > 0 ) {
            // If user exists return true
            return true;
        } else {
            // If user does not exist retrun false
            return false;
        }
    }
}