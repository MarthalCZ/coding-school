<?php
// Define the namespace "core" for the Database class
namespace Core;
// Import the "mysqli" class from the PHP MySQLi extension for database connectivity
use mysqli;
// Define the Database class
class Database {
    // Protected property to store the database connection object
    protected $connection;

    public function __construct() {
        // Database connection parameters
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "meal-counter";
        // Create a new MySQLi connection
        $connection = new mysqli($servername, $username, $password, $dbname);
        // Check if the connection was successful
        if ($connection->connect_error) {
            // If connection fails, terminate script and display error message
            die("Connection failed: " . $connection->connect_error);
        }
        // Store the connection object in a class property
        $this->connection = $connection;
    }

    public function executeQuery(string $sql) {
        $result = $this->connection->query($sql);
        // Check if the query is a SELECT statement
        if (strpos($sql, "SELECT") !== false) {
            // Fetch all rows as an associative array
            if ($result) {
                $rows = [];
                while ($row = $result->fetch_assoc()) {
                    $rows[] = $row;
                }
                return $rows;
            } else {
                // Return an empty array if no rows were fetched
                return [];
            }
        } else {
            // Handle other types of queries (INSERT, UPDATE, DELETE, etc.) if needed
            return $result;
        }
    }
}