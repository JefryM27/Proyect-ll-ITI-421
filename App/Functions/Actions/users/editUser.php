<?php
require($_SERVER['DOCUMENT_ROOT'] . '/utils/database.php');

session_start();
//Check if the user is authenticated
if (!isset($_SESSION['username'])) {
    header("Location: /pages/login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Get the user ID
    $username = $_SESSION['username'];
    $pdo = get_pdo_connection();
    $sql = "SELECT id FROM users WHERE username = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $user_id = $user['id'];

    //Get the form data
    $fullName = $_POST['fullName'];
    $speedAverage = $_POST['speedAverage'];
    $description = $_POST['description'];

    // Check if a configuration record already exists for this user
    $sql = "SELECT * FROM user_settings WHERE user_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user_id]);
    $existing_settings = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($existing_settings) {
        // Update the data in the database
        $sql = "UPDATE user_settings SET full_name = ?, speed_average = ?, description = ? WHERE user_id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$fullName, $speedAverage, $description, $user_id]);
        header("Location: /pages/dashboard.php");
        exit();
    } else {
        //If there is no existing configuration record, insert a new one
        $sql = "INSERT INTO user_settings (user_id, full_name, speed_average, description) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$user_id, $fullName, $speedAverage, $description]);
        header("Location: /pages/dashboard.php");
        exit();
    }
}
?>