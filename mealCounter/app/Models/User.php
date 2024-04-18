<?php

namespace App\Models;

class User extends BaseModel {
    // Retrieve all users from the database
    public function all($user_id) {
        // Prepare the SQL query to select account details for a specific user_id
        $sql = "SELECT * FROM users WHERE id = '$user_id'";

        // Execute the query with the provided user_id as a parameter
        return $this->database->executeQuery($sql, [$user_id]);
    }
    // Create a new user with the provided data
    public function create($data) {
        // Hash the password using the PASSWORD_DEFAULT algorithm
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        // Check if the user already exists based on the email address
        if ($this->exists($data['email'])) {
            // If user already exists, return false
            return false;
        }    
        // Prepare the SQL query for inserting a new user
        $sql = "INSERT INTO users (email, password) VALUES ('" . $data['email'] . "', '" . $data['password'] . "')";
        // Execute the SQL query to insert the new user into the database
        $this->database->executeQuery($sql);
         // If user creation successful, return true
        return true;
    }

    public function updateEmail(int $user_id, string $new_email) {
        // Prepare the SQL query for updating the user's password
        $sql = "UPDATE users SET email = '$new_email' WHERE id = $user_id";

        // Execute the SQL query to update the password
        $this->database->executeQuery($sql);
    }
    
    public function updatePassword(int $user_id, string $new_password) {
        // Hash the new password
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
        // Prepare the SQL query for updating the user's password
        $sql = "UPDATE users SET password = '$hashed_password' WHERE id = $user_id";
        // Execute the SQL query to update the password
        $this->database->executeQuery($sql);
    }

    public function updateSubscription(int $user_id, int $value) {
        // Prepare the SQL query for updating the user's password
        $sql = "UPDATE users SET subscribed = '$value' WHERE id = $user_id";
        // Execute the SQL query to update the password
        $this->database->executeQuery($sql);
    }

    public function updateUnits(int $user_id, int $value) {
        // Prepare the SQL query for updating the user's password
        $sql = "UPDATE users SET units = '$value' WHERE id = $user_id";
        // Execute the SQL query to update the password
        $this->database->executeQuery($sql);
    }

    public function updateMode(int $user_id, int $value) {
        // Prepare the SQL query for updating the user's password
        $sql = "UPDATE users SET mode = '$value' WHERE id = $user_id";
        // Execute the SQL query to update the password
        $this->database->executeQuery($sql);
    }

    public function updateLanguage(int $user_id, int $value) {
        // Prepare the SQL query for updating the user's password
        $sql = "UPDATE users SET language = '$value' WHERE id = $user_id";
        // Execute the SQL query to update the password
        $this->database->executeQuery($sql);
    }

    public function updateIngredientCount(int $user_id, int $value) {
        // Prepare the SQL query for updating user's ingredient count
        $sql = "UPDATE users SET ingredients = '$value' WHERE id = $user_id";
        // Execute the SQL query to update ingredient count
        $this->database->executeQuery($sql);
    }

    public function deleteUser($user_id) {
        // Prepare the SQL query for deleting user's account
        $sql = "DELETE FROM users WHERE id = '$user_id'";
        // Execute the SQL query to delete the account
        return $this->database->executeQuery($sql, $user_id);
    }

    // Find a user by their email address
    public function findByEmail($email) {
        // Prepare the SQL query for filtering matching email
        $sql = "SELECT * FROM users WHERE email = '$email'";
        // Return the first result (assuming there's only one matching user)
        return $this->database->executeQuery($sql)[0];
    }
    // Check if a user with the specified email address exists
    public function exists(string $email) {
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