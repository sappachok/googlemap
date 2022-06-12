<?php
    $mysqli = new mysqli("localhost", "root", "", "mygps") or die("Cannot connect database."); 

    // Check connection
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MariaDB: " . $mysqli -> connect_error;
        exit();
    }

    $sql = "SELECT * FROM location ORDER BY id";
	$result = $mysqli -> query($sql);

    var_dump($result);

?>