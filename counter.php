<?php
include 'config.php';

// Get today's date
$today = date('Y-m-d');

// Check if today's date exists in database
$sql = "SELECT * FROM visitors WHERE visit_date = '$today'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Update count
    $sql = "UPDATE visitors SET count = count + 1 WHERE visit_date = '$today'";
} else {
    // Insert new record
    $sql = "INSERT INTO visitors (visit_date, count) VALUES ('$today', 1)";
}

$conn->query($sql);

// Get total visitors
$sql = "SELECT SUM(count) as total FROM visitors";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$totalVisitors = $row['total'];

$conn->close();
?>