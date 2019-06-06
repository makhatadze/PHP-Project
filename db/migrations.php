<?php

$config = require __DIR__ . '/../config.php';

$servername = $config['host'];
$username = $config['username'];
$password = $config['password'];
$database = $config['database'];

$conn = new PDO("mysql:host=$servername", $username, $password);

try {
    $sql = "CREATE DATABASE $database
    DEFAULT CHARACTER SET utf8
    DEFAULT COLLATE utf8_unicode_ci;
    ";
    $conn->exec($sql);
    echo "Database created successfully" . PHP_EOL;
    $conn->query("use $database");

    $sql = "CREATE TABLE IF NOT EXISTS users (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        full_name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        password VARCHAR(255),
        reg_date TIMESTAMP
    )";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table \"users\" created successfully" . PHP_EOL;

    $sql = "CREATE TABLE IF NOT EXISTS jobs (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        user_id INT(6) NOT NULL,
        cname VARCHAR (50),
        company VARCHAR (50),
        category VARCHAR (100),
        city VARCHAR (50),
        ganakveti VARCHAR (30),
        pirobebi VARCHAR(5000),
        public_date TIMESTAMP
         
    )";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table \"jobs\" created successfully" . PHP_EOL;
    echo "User \"admin\" was inserted into database" . PHP_EOL;

} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
