<?php

$host = "db01.dbhost.dev";
$username = "user_45695sb2k";
$password = "p45695sb2k";
$database = "db_45695sb2k";
$port = 5051;

$conn = new mysqli(
    $host,
    $username,
    $password,
    $database,
    $port
);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

?>