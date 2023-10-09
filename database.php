<?php

$host = "localhost";
$dbname = "messagelog";
$user_name = "root";
$password = "";

$mysqli = new mysqli(hostname: $host,
                     username: $user_name,
                     database: $dbname);
                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;