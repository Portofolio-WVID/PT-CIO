<?php
// Koneksi database untuk visitor counter
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'pt_cio_visitors';

$conn = new mysqli($host, $username, $password, $database);

// Create database and table if not exists
if ($conn->connect_error) {
    // If database doesn't exist, try to create it
    $conn = new mysqli($host, $username, $password);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Create database
    $sql = "CREATE DATABASE IF NOT EXISTS $database";
    if ($conn->query($sql) === TRUE) {
        $conn->select_db($database);
        // Create table
        $sql = "CREATE TABLE IF NOT EXISTS visitors (
            id INT AUTO_INCREMENT PRIMARY KEY,
            visit_date DATE UNIQUE,
            count INT DEFAULT 1
        )";
        $conn->query($sql);
    }
} else {
    $conn->select_db($database);
}
?>