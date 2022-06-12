<?php
    $mysqli = new mysqli("localhost", "root", "", "mygps2") or die("Cannot connect database."); 

    // Check connection
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MariaDB: " . $mysqli -> connect_error;
        exit();
    }
    
    
?>