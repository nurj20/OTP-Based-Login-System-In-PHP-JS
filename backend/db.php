<?php
$conn= new mysqli("localhost:3306", 'YOUR_DB_USER_NAME', 'YOUR_DB_PASSWORD', 'DB_NAME');
if($conn->connect_errno){
    echo json_encode(['status' => $conn->connect_error]);
    exit();
}