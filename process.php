<?php


if ( ! filter_var($_POST["username"])) {
    die("Username is required");
}
if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}
if ( ! filter_var($_POST["message"])) {
    die("message input required");
}




$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO messagetab (username, email, message)
        VALUES (?,?,?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sss",
                  $_POST["username"],
                  $_POST['email'],
                  $_POST['message']);
                  
if ($stmt->execute()) {

    header("Location: index.php#contact");
    exit;
    
} else {
    
    if ($mysqli->errno === 1062) {
        // die("email already taken");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}

