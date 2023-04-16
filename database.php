<?php

require __DIR__ . "config.class.php";

$host = Config::$host;
$username = Config::$username;
$password = Config::$password;
$dbname = Config::$database;

$mysqli = new mysqli(
    hostname: $host,
    username: $username,
    password: $password,
    database: $dbname
);

if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;
