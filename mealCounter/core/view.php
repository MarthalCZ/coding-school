<?php
// Define the namespace "core" for the View class
namespace Core;
// Define the View class
class View {
    // Define a static method named render
    public static function render($view_name, $data = []) {
        // Define possible directories where views/components can be located
        $directories = ['Views', 'Components'];
        // Loop over each directory
        foreach ($directories as $directory) {
            // Construct the file path for the view/component
            $file_path = "$directory/$view_name.php";
            // Check if the file exists
            if (file_exists($file_path)) {
                // If the file exists, extract data variables
                foreach ($data as $key => $value) {
                    $$key = $value;
                }
                // Include the file
                include $file_path;
                // Stop searching for the file once found
                break;
            }
        }
    }
}