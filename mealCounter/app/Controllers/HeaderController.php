<?php

namespace App\Controllers;

use Core\View;
use Core\Session;
use App\Models\User;

class HeaderController {

    public function changeMode() {
        // Retrieve user_id from the session
        $user_id = $_SESSION['user_id'];
        // Instantiate the User model and retrieve the user information
        $userModel = new User();
        // Retrieve user details
        $user = $userModel->all($user_id)[0];
        // Toggle user's units
        if ($user['mode'] == 1) {
            // If currently using dark mode, update to light mode
            $userModel->updateMode($user_id, 0);
            // Pass new value to session
            Session::updateSession('mode', 0);
            // Redirect to account page with success message
            header("Location: " . $_SERVER['HTTP_REFERER'] . "?success=light-mode");
        } else if ($user['mode'] == 0) {
            // If currently using light mode, update to dark mode
            $userModel->updateMode($user_id, 1);
            // Pass new value to session
            Session::updateSession('mode', 1);
            // Redirect to account page with success message
            header("Location: " . $_SERVER['HTTP_REFERER'] . "?success=dark-mode");
        }
    }

    public function changeLanguage() {
        // Retrieve user_id from the session
        $user_id = $_SESSION['user_id'];
        // Instantiate the User model and retrieve the user information
        $userModel = new User();
        // Retrieve user details
        $user = $userModel->all($user_id)[0];
        // Toggle user's units
        if ($user['language'] == 1) {
            // If currently using english, update to czech
            $userModel->updateLanguage($user_id, 0);
            // Pass new value to session
            Session::updateSession('language', 0);
            // Redirect to account page with success message
            header("Location: " . $_SERVER['HTTP_REFERER'] . "?success=czech-lang");
        } else if ($user['language'] == 0) {
            // If currently using czech, update to english
            $userModel->updateLanguage($user_id, 1);
            // Pass new value to session
            Session::updateSession('language', 1);
            // Redirect to account page with success message
            header("Location: " . $_SERVER['HTTP_REFERER'] . "?success=english-lang");
        }
    }
}