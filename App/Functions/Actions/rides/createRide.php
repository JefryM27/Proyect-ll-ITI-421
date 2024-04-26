<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . '/utils/database.php');
$pdo = get_pdo_connection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rideName = $_POST['rideName'];
    $startFrom = $_POST['startFrom'];
    $endTo = $_POST['end'];
    $description = $_POST['description'];
    $departure = $_POST['departure'];
    $arrival = $_POST['arrival'];
    $user_id = $_POST['user_id'];

    // Verificar si el usuario existe
    $userExists = false;
    $stmt = $pdo->prepare("SELECT id FROM users WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        $userExists = true;
    }

    if (!$userExists) {
        echo "Error: El usuario con ID $user_id no existe.";
        exit(); // Detener el proceso si el usuario no existe
    }

    // Verificar si los días están seleccionados
    $selectedDays = $_POST['days'] ?? [];
    $days = '';
    $daysArray = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
    foreach ($daysArray as $day) {
        if (in_array($day, $selectedDays)) {
            $days .= $day . ',';
        }
    }
    $days = rtrim($days, ',');


    // Preparar la consulta SQL para la inserción del viaje
    $sql = "INSERT INTO rides (ride_name, start_from, end_to, description, departure_time, arrival_time, days, user_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([$rideName, $startFrom, $endTo, $description, $departure, $arrival, $days, $user_id])) {
        header("Location: ../pages/dashboard.php");
        exit();
    } else {
        echo "Error: No se pudo ejecutar la consulta SQL.";
    }
}
?>