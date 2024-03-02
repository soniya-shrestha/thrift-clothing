<?php
    // database_connection.php
    $connection = mysqli_connect('localhost', 'root', '', 'thriftclothing');
    if (!$connection) {
        die('Database Connection failed' . mysqli_error($connection));
    }
?>