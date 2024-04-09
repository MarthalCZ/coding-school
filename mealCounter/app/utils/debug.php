<?php

namespace App\Utils;

use Core\Database;

class Debug {
    public static function dump($variable) {
        echo "<pre>";
        print_r($variable);
        echo "</pre>";
    }

    public static function test() {
        try {
            $db = new Database();
            echo "Database connection successful!";
        } catch (\Exception $e) {
            echo "Database connection failed: " . $e->getMessage();
        }
    }
}