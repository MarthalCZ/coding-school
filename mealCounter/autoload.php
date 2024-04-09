<?php

// Register an autoloader function using spl_autoload_register
spl_autoload_register(function ($class) {
    // Define the prefix (unused in this case)
    $prefix = '';

    // Set the base directory to the current directory
    $base_dir = __DIR__ . "/";

    // Remove the prefix from the class name
    $class_name = str_replace($prefix, '', $class);

    // Construct the file path for the class
    $file = $base_dir . str_replace('\\', '/', $class_name) . '.php';

    // Check if the class file exists
    if (file_exists($file)) {
        // If the file exists, require (include) it
        require $file;
    }
});