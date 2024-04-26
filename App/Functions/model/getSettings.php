<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/utils/database.php');
session_start();

// Check if the user is authenticated
if (!isset($_SESSION['username'])) {
    header("Location: /pages/users/login.php");
    exit();
}

// Get the user ID
$username = $_SESSION['username'];
$pdo = get_pdo_connection();
$sql = "SELECT id FROM users WHERE username = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$username]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
$user_id = $user['id'];

// Get the user's configuration data, if it exists
$sql = "SELECT * FROM user_settings WHERE user_id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$user_id]);
$user_settings = $stmt->fetch(PDO::FETCH_ASSOC);

//If there is no configuration for the user, set default values
if (!$user_settings) {
    $user_settings = [
        'full_name' => '',
        'speed_average' => '', 
        'description' => ''
    ];
}
?>
