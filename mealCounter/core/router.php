<?php

// Define the namespace "core" for the Router class
namespace Core;

// Import the 'view' class from the 'core' namespace
use Core\View;

// Define the Router class
class Router
{
    public $routes = [];

    // Method to add a new route to the router
    public function addRoute($route, $controller, $callback, $http_method)
    {
        // Combine the HTTP method and route to create a unique key for the route
        $this->routes[$http_method.$route] =
            [
                'controller' => $controller,
                'callback' => $callback,
            ];
    }

    // Method to run the router and execute the appropriate controller action
    public function run()
    {
        // Get the requested URL from the server
        $url = $_SERVER['REQUEST_METHOD'] . $_SERVER['REQUEST_URI'];
        // Extract the path from the URL
        $url = parse_url($url)['path'];

        // Check if the requested URL exists in the registered routes
        if (array_key_exists($url, $this->routes)) {

            // Get the controller and callback for the requested URL
            $controller = $this->routes[$url]['controller'];
            $callback =  $this->routes[$url]['callback'];

            // Instantiate the controller
            $controller = new $controller();

            // Call the specified callback method on the controller
            $controller->$callback();
        } else {
            // If the URL is not found in the routes, render a 404 view
            View::render('not-found');
        }
    }
}