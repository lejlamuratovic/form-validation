<?php

require __DIR__ . "/config.class.php";

$host = Config::$host;
$username = Config::$username;
$password = Config::$password;
$dbname = Config::$database;

$conn = new mysqli(
    hostname: $host,
    username: $username,
    password: $password,
    database: $dbname
);

if ($conn->connect_errno) {
    die("Connection error: " . $conn->connect_error);
}
