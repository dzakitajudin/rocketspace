<?php

    // setting db lokal
    // $host = '127.0.0.1';
    // change with your env
    $host = '127.0.0.1:8889';
    $login = 'root';
    $pass = 'root';
    $db = 'rocketspace';
    $port = '3306';

    // create connection
    $conn = new mysqli($host,$login,$pass,$db,$port);

    if ($conn->connect_errno) {
        // show error
        printf("Connect failed: %s\n", $conn->connect_error);
        exit();
    }

?>