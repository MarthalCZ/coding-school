<?php
    //SETUP CONNECTION
    $mysqli = new mysqli("127.0.0.1", "root", "", "toDoApp");

    //CHECK CONNECTION
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    }
    
    var_dump($mysqli);
?>