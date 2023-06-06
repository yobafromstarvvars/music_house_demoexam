<?php

$mysqli = require __DIR__."/connect_db.php";
$sql = sprintf("SELECT * FROM user WHERE login = '%s'", $mysqli->real_escape_string($_POST["login"]));
$result = $mysqli->query($sql);
$user = $result->fetch_assoc();
if ($user) {
    if (password_verify($_POST["password"], $user["password_hash"])) {
        session_start();
        session_regenerate_id();
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["is_admin"] = $user["is_admin"];
        $_SESSION["user_name"] = $user["name"];
        header("Location: /index.php");
        exit;
    }
} else {
    die("failed logging");
}