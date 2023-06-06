<?php

$hostname = "localhost";
$username = "root";
$database = "MusicHouse";
$password = "";

$mysqli = new mysqli($hostname, $username, $password, $database);

if ($mysqli->errno) {
    die("Connection error: ". $mysqli->connect_error);
}

return $mysqli;