<?php
//require "db_config.php";
include('includes/connect.php');


date_default_timezone_set("Asia/Kolkata"); // Adjust to your timezone
$current_time = date('H:i');
$notifications = [];

$result = $con->query("SELECT * FROM customers");
while ($row = $result->fetch_assoc()) {
    if ($current_time == date('H:i', strtotime($row['breakfast_time']))) {
        $notifications[] = "⏰ " . $row['customer_name'] . " needs Breakfast!";
    }
//    if ($current_time == date('H:i', strtotime($row['lunch_time']))) {
//        $notifications[] = "🍱 " . $row['name'] . " needs Lunch!";
//    }
    if ($current_time == date('H:i', strtotime($row['dinner_time']))) {
        $notifications[] = "⏰ " . $row['customer_name'] . " needs Dinner!";
    }
}

header('Content-Type: application/json');
echo json_encode($notifications);
?>