<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . '/utils/database.php');
$pdo = get_pdo_connection();

//capture the values
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rideName = $_POST['rideName'];
    $startFrom = $_POST['startFrom'];
    $endTo = $_POST['end'];
    $description = $_POST['description'];
    $departure = $_POST['departure'];
    $arrival = $_POST['arrival'];

    // Obtener el ID del usuario desde la sesión
    session_start();
    $userId = $_SESSION['user_id'];

    //Concatenate the selected days
    $days = '';
    $daysArray = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];
    foreach ($daysArray as $day) {
        if (!empty($_POST[$day])) {
            $days .= $_POST[$day] . ',';
        }
    }
    $days = rtrim($days, ',');

    //Prepare the SQL query
    $sql = "INSERT INTO rides (ride_name, start_from, end_to, description, departure_time, arrival_time, days, user_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([$rideName, $startFrom, $endTo, $description, $departure, $arrival, $days, $userId])) {
        header("Location: /pages/dashboard.php");
        exit();
    } else {
        echo "Error: Could not execute $sql. " . $pdo->errorInfo();
    }
}
?>