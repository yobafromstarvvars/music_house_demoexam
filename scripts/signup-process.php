<?php 

if (empty($_POST["name"]) || empty($_POST["surname"]) || empty($_POST["patronymic"]) || empty($_POST["login"])) {
    die("All field must be filled.");
}

if (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Incorrect email format.");
}

// if (strlen($_POST['password']) < 8) {
//     die("Password must be at least 8 characters long");
// }

// if (! preg_match("/[0-1]/", $_POST["password"])) {
//     die("Passwords must have at leatst one number");
// }

// if (! preg_match("/[a-z]/i", $_POST["password"])) {
//     die("Passwords must have at least on letter");
// }

if ($_POST["password"] !== $_POST["password_confirm"]) {
    die("Passwords must match");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__."/connect_db.php";

$sql = "INSERT INTO User (name, surname, patronymic, login, email, password_hash) VALUES (?,?,?,?,?,?)";

$stmt = $mysqli->stmt_init();

$stmt->prepare($sql);

if (! $stmt->prepare($sql)) {
    die("SQL error: ". $mysqli->error);
}

$stmt->bind_param("ssssss", 
                    $_POST["name"],
                    $_POST["surname"],
                    $_POST["patronymic"],
                    $_POST["login"],
                    $_POST["email"],
                    $password_hash
);

if ($stmt->execute()) {
    header("Location: /index.php");
    exit;
} else {
    if ($mysqli->errno === 1062) {
        die("Email or login is alrealy taken.");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}