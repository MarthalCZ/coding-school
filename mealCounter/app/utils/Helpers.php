<?php

namespace App\Utils;

class Helpers {
    public static function getLocalization() {
        // Determine language based on session value
        if (isset($_SESSION['account']['language'])) {
            // Ternary operator to set $language based on $_SESSION['account']['language']
            $language = ($_SESSION['account']['language'] == 0) ? "czech" : "english";
        } else {
            // Use default language if session is not set
            $language = "czech";
        }
        // Path to localization file with dynamic language name
        $localization_file = $_SERVER['DOCUMENT_ROOT'] . "/GitHub/coding-school/mealCounter/views/resources/localizations/$language.php";
        // Check if the localization file exists
        if (file_exists($localization_file)) {
            include $localization_file;
            return $localization; // Assuming $localizationArray is defined in the included file
        } else {
        return []; // Return an empty array if localization file does not exist
        }
    }
}