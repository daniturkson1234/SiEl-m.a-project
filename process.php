<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

$username = trim($_POST["username"] ?? "");
$email = trim($_POST["email"] ?? "");
$message = trim($_POST["message"] ?? "");

if ($username === "") {
    $_SESSION['form_message'] = "Username is required.";
    $_SESSION['form_message_type'] = "error";
    header("Location: index.php#contact");
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['form_message'] = "A valid email is required.";
    $_SESSION['form_message_type'] = "error";
    header("Location: index.php#contact");
    exit;
}

if ($message === "") {
    $_SESSION['form_message'] = "Message input is required.";
    $_SESSION['form_message_type'] = "error";
    header("Location: index.php#contact");
    exit;
}

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO messagetab (username, email, message) VALUES (?, ?, ?)";
$stmt = $mysqli->prepare($sql);

if (!$stmt) {
    $_SESSION['form_message'] = "SQL error: " . $mysqli->error;
    $_SESSION['form_message_type'] = "error";
    header("Location: index.php#contact");
    exit;
}

$stmt->bind_param("sss", $username, $email, $message);

if ($stmt->execute()) {
    $_SESSION['form_message'] = "Your message has been sent successfully.";
    $_SESSION['form_message_type'] = "success";
    header("Location: index.php#contact");
    exit;
} else {
    if ($mysqli->errno === 1062) {
        $_SESSION['form_message'] = "This email already exists.";
    } else {
        $_SESSION['form_message'] = "Something went wrong. Please try again.";
    }

    $_SESSION['form_message_type'] = "error";
    header("Location: index.php#contact");
    exit;
}
