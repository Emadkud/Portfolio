<?php

function connectToDatabase() {

    $dsn      = 'mysql:dbname=classicmodels;host=localhost:80';
    $password = '';
    $user     = 'root';

    $pdo = new PDO($dsn, $user, $password);

    return $pdo;
}
