<?php
// Define the namespace "core" for the Session class
namespace Core;

use Core\Auth;
use App\Models\User;

class Session {

    public static function updateSession($key, $value) {
    // Retrieve the existing account data from the session
    $account = $_SESSION['account'] ?? [];

    // Update the specified key with the new value
    $account[$key] = $value;

    // Store the updated account data back into the session
    $_SESSION['account'] = $account;
    }
}