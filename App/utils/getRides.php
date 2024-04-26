<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/utils/database.php');
$pdo = get_mysql_connection();

// Verificar si se recibió un ID de viaje en la URL
if (isset($_GET['rideId'])) {
    $rideId = $_GET['rideId'];
    
    // Preparar la consulta SQL para obtener la información del viaje
    $sql = "SELECT * FROM rides WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$rideId]);
    $ride = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verificar si se encontró el viaje
    if ($ride) {
        // Asignar valores de la base de datos a variables
        $rideName = $ride['ride_name'];
        $startFrom = $ride['start_from'];
        $endTo = $ride['end_to'];
        $description = $ride['description'];
        $departure = $ride['departure_time'];
        $arrival = $ride['arrival_time'];
        $days = explode(',', $ride['days']);
    } else {
        // Si no se encontró el viaje
        echo "Error: El viaje no se encontró.";
        exit();
    }
} else {
    // Si no se proporcionó un ID de viaje en la URL
    echo "Error: ID de viaje no proporcionado.";
    exit();
}
?>
