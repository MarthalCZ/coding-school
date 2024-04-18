<?php

namespace App\Controllers;

use Core\Auth;
use Core\View;
use Core\Session;
use App\Models\User;
use App\Utils\Debug;
use App\Utils\Helpers;

error_reporting(E_ALL);
ini_set("display_errors", 1);

class MyAccountController {
    
    public function show() {
        // Check if the user is logged in
        if (!Auth::user()) {
            // Redirect unauthenticated users to the login page
            header('Location: /GitHub/coding-school/mealCounter/login');
            exit;
        }

        $user = Auth::user();
        
        $account = [];
        $queryResult = (new User)->all($user);

        $account = $queryResult[0];

        $localization = Helpers::getLocalization();

        // Change subscription button text based on sub status
        $sub_button = ($account['subscribed'] == 0) ? $localization['subscribe'] : $localization['unsubscribe'];
        // Check or uncheck units checkbox
        $units_button = ($account['units'] == 0) ? "" : "checked";

            // Append each row to the $account array with modified values
            $account = [
                'id' => $account['id'],
                'email' => $account['email'],
                'password' => $account['password'],
                'registered' => date('j.n.Y', strtotime($account['registered'])),
                'subscribed' => ($account['subscribed'] == 0) ? $localization['no'] : $localization['yes'],
                'mode' => ($account['mode'] == 0) ? "light" : "dark",
                'language' => ($account['language'] == 0) ? "CZ" : "ENG",
                'units' => ($account['units'] == 0) ? "kCal" : "kJ",
                'meals' => $account['meals'],
                'ingredients' => $account['ingredients']
            ];
            // Refresh meal & ingredient count in session
            Session::updateSession('meals', $account['meals']);
            Session::updateSession('ingredients', $account['ingredients']);
        // Render the view and pass data
        View::render('my-account', [
            'account' => $account,
            'sub_button' => $sub_button,
            'units_button' => $units_button
            ]
        );
    }

    public function changeEmail() {
        // Validate form submission and retrieve new email
        if (isset($_POST['new-email'])) {
            $new_email = $_POST['new-email'];
            $repeat_email = $_POST['repeat-email'];
            $user_id = $_SESSION['user_id'];
            // Update the user's email
            if ($new_email === $repeat_email) {
                // Instantiate the User model
                $userModel = new User();
                // Call the updateEmail method to update the user's email
                $userModel->updateEmail($user_id, $new_email);
                // Pass new value to session
                Session::updateSession('email', $new_email);
                // Redirect to account page with success message
                header('Location: /GitHub/coding-school/mealCounter/my-account?success=email_changed');
                exit;
            } else {
                // Redirect to account page with error message
                header('Location: /GitHub/coding-school/mealCounter/my-account?error=email_mismatch');
                exit;
            }
        } else {
            // Redirect back to account page with error message for missing credentials
            header('Location: /GitHub/coding-school/mealCounter/my-account?error=missing_credentials');
            exit;
        }
    }

    public function changePassword() {
        // Validate form submission and retrieve new password
        if (isset($_POST['new-password'])) {
            $new_password = $_POST['new-password'];
            $repeat_password = $_POST['repeat-password'];
            $user_id = $_SESSION['user_id'];
            // Update the user's password
            if ($new_password === $repeat_password) {
                // Instantiate the User model
                $userModel = new User();
                // Call the updatePassword method to update the user's password
                $userModel->updatePassword($user_id, $new_password);
                // Redirect to account page with success message
                header('Location: /GitHub/coding-school/mealCounter/my-account?success=password_changed');
            } else {
                // Redirect to account page with error message
                header('Location: /GitHub/coding-school/mealCounter/my-account?error=password_unchanged');
            }
        } else {
            // Redirect back to account page with error message (optional)
            header('Location: /GitHub/coding-school/mealCounter/my-account?error=missing_credentials');
        }
    }

    public function changeSubscription() {
        // Retrieve user_id from the session
        $user_id = $_SESSION['user_id'];
        // Instantiate the User model and retrieve the user information
        $userModel = new User();
        // Retrieve user details
        $user = $userModel->all($user_id)[0];
        // Toggle user's subscription
        if ($user['subscribed'] == 1) {
            // If currently subscribed, update subscription to 0 (unsubscribed)
            $userModel->updateSubscription($user_id, 0);
            // Pass new value to session
            Session::updateSession('subscribed', 0);
            // Redirect to account page with success message
            header('Location: /GitHub/coding-school/mealCounter/my-account?success=unsubscribed');
        } else if ($user['subscribed'] == 0) {
            // If currently not subscribed, update subscription to 1 (subscribed)
            $userModel->updateSubscription($user_id, 1);
            // Pass new value to session
            Session::updateSession('subscribed', 1);
            // Redirect to account page with success message
            header('Location: /GitHub/coding-school/mealCounter/my-account?success=subscribed');
        }
    }

    public function changeUnits() {
        // Retrieve user_id from the session
        $user_id = $_SESSION['user_id'];
        // Instantiate the User model and retrieve the user information
        $userModel = new User();
        // Retrieve user details
        $user = $userModel->all($user_id)[0];
        // Toggle user's units
        if ($user['units'] == 1) {
            // If currently using kJ, update units to 0 (kCal)
            $userModel->updateUnits($user_id, 0);
            // Pass new value to session
            Session::updateSession('units', 0);
            // Redirect to account page with success message
            header('Location: /GitHub/coding-school/mealCounter/my-account?success=units-kj');
        } else if ($user['units'] == 0) {
            // If currently using kCal, update units to 1 (kJ)
            $userModel->updateUnits($user_id, 1);
            // Pass new value to session
            Session::updateSession('units', 1);
            // Redirect to account page with success message
            header('Location: /GitHub/coding-school/mealCounter/my-account?success=units-kcal');
        }
    }

    public function removeAccount() {
        // Validate form submission and retrieve new password
        if (isset($_POST['password'])) {
            // Retrieve user_id from the session
            $user_id = $_SESSION['user_id'];
            // Instantiate the User model and retrieve the user information
            $userModel = new User();
            // Retrieve user details
            $user = $userModel->all($user_id)[0];
            
            $password = $_POST['password'];

            if (password_verify($password, $user['password'])) {
                // Logout (and destroy session) before removing user account
                Auth::logout();
                // Remove user account from DB via User model
                $userModel->deleteUser($user_id);
                // Redirect to registration page with success message
                header('Location: /GitHub/coding-school/mealCounter/register?success=account-removed');
            } else {
                // Redirect to account page with error message
                header('Location: /GitHub/coding-school/mealCounter/my-account?error=wrong-credentials');
            }
        }
    }
}