<?php

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'db3';

    $connection = mysqli_connect('localhost','root','','db3');

    // Checking the connection
    if (mysqli_connect_errno()) {
        die('Database connection failed. '. mysqli_connect_error());
    }

?>