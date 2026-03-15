<?php

$mysqli = require __DIR__ . "/database.php";

$message = trim($_GET["message"] ?? "");

if ($message === "") {
    echo json_encode(["available" => false]);
    exit;
}

$sql = "SELECT id FROM messagetab WHERE message = ?";
$stmt = $mysqli->prepare($sql);

if (!$stmt) {
    echo json_encode(["available" => false]);
    exit;
}

$stmt->bind_param("s", $message);
$stmt->execute();
$result = $stmt->get_result();

$is_available = $result->num_rows === 0;

header("Content-Type: application/json");
echo json_encode(["available" => $is_available]);
