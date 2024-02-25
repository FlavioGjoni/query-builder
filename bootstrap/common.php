<?php

// Autoloader
require_once __DIR__ . "/../vendor/autoload.php";

// Environment variables (root folder of app)
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

// mandatory DB keys
$db_keys = ['DB_HOST', 'DB_PORT', 'DB_DATABASE', 'DB_USERNAME', 'DB_PASSWORD'];
foreach ($db_keys as $key)
    if (!isset($_ENV[$key])) {
        throw new Exception("Environment key $key must be set in the .env file");
    }

// PDO handler for DB connection
$dsn = "mysql:host=$_ENV[DB_HOST];port=$_ENV[DB_PORT];dbname=$_ENV[DB_DATABASE];charset=utf8mb4";
$db = new PDO($dsn, $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD']);