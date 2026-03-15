<?php

$mysqli = require __DIR__ . "/database.php";

$email = trim($_GET["email"] ?? "");

if ($email === "") {
    echo json_encode(["available" => false]);
    exit;
}

$sql = "SELECT id FROM messagetab WHERE email = ?";
$stmt = $mysqli->prepare($sql);

if (!$stmt) {
    echo json_encode(["available" => false]);
    exit;
}

$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

$is_available = $result->num_rows === 0;

header("Content-Type: application/json");
echo json_encode(["available" => $is_available]);
