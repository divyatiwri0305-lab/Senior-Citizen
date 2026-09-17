<?php
session_start();

// Function to check login
function checkLogin() {
    if (!isset($_SESSION['username'])) {
        // Save requested page
        $_SESSION['redirect_url'] = $_SERVER['REQUEST_URI'];
        header("Location: ./users_area/user_login.php");
        exit();
    }
}
?>