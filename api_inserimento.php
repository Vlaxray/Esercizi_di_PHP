<?php
header("Content-Type: application/json");
require_once('../config/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    
    $stmt = $conn->prepare("INSERT INTO products (user_id, name, brand, type) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("isss", $data['user_id'], $data['name'], $data['brand'], $data['type']);
    $stmt->execute();
    
    echo json_encode(["success" => true]);
}
?>