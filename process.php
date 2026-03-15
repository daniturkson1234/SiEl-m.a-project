<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

$username = trim($_POST["username"] ?? "");
$email = trim($_POST["email"] ?? "");
$message = trim($_POST["message"] ?? "");

if ($username === "") {
    die("Username is required");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

if ($message === "") {
    die("Message input is required");
}

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO messagetab (username, email, message)
        VALUES (?, ?, ?)";

$stmt = $mysqli->prepare($sql);

if (!$stmt) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sss", $username, $email, $message);

if ($stmt->execute()) {

    header("Location: index.php?status=success#contact");
    exit;

} else {

    die("Database error: " . $mysqli->error);

}
