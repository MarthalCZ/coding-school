<?php
// Start the session
session_start();

// Require the autoload file to autoload classes
require "autoload.php";

// Require the routes file for defining routes
require "web/routes.php";

// Require the Database class file
require_once "core/database.php";