<?php

session_start();

if (! isset($_SESSION["user_id"])) {
    header("Location: /index.php");
    exit;
}

$mysqli = require __DIR__."/connect_db.php";
$sql = "SELECT * FROM user WHERE id = {$_SESSION["user_id"]}";
$result = $mysqli->query($sql);
$user = $result->fetch_assoc();

return $user;