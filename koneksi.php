<?php

    $db = mysqli_connect("localhost", "root", "", "db_notes");

    if (!$db) {
        die("Connection failed: " . $db->connect_error);
    }

?>
