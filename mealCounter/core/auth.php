<?php

// Define the namespace "core" for the Auth class
namespace Core;

use App\Utils\Debug;

error_reporting(E_ALL);
ini_set("display_errors", 1);

// Define the Auth class
class Auth
{
    // Static method to retrieve the current user's ID from the session
    public static function user(): int|null
    {
        // Return the user ID if it exists in the session, otherwise return null
        return $_SESSION['user_id'] ?? null;
    }

    // Static method to log in a user by storing their ID in the session
    public static function login(int $user_id)
    {
        // Store the provided user ID in the session variable 'user_id'
        $_SESSION['user_id'] = $user_id;
    }

    // Static method to log out the current user by unsetting and destroying the session
    public static function logout()
    {
        // Unset all session variables
        session_unset();
        // Destroy the session
        session_destroy();
    }
}