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
            // Assuming $localization array is defined in the included file
            return $localization;
        } else {
            // Return an empty array if localization file does not exist
            return [];
        }
    }

    public static function getArticle($article) {
        // Determine language based on session value
        if (isset($_SESSION['account']['language'])) {
            // Ternary operator to set $language based on $_SESSION['account']['language']
            $language = ($_SESSION['account']['language'] == 0) ? "cs" : "en";
        } else {
            // Use default language if session is not set
            $language = "cs";
        }
        // Path to article file with dynamic article name
        $article_file = $_SERVER['DOCUMENT_ROOT'] . "/GitHub/coding-school/mealCounter/views/resources/articles/$article-$language.php";
        if (file_exists($article_file)) {
            include $article_file;
            // Assuming $article_content is defined in the included file
            return $article_content;
        } else {
            // Return an empty string if article file does not exist
            return "<h1>Článek $article-$language neexistuje</h1>";
        }
    }
}