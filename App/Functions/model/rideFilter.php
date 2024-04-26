<?php

    //check that the form data arrive to de origin and destiny
if (isset($_POST['fromLocation'], $_POST['toLocation'])) {
    $fromLocation = $_POST['fromLocation'];
    $toLocation = $_POST['toLocation'];

    require_once($_SERVER['DOCUMENT_ROOT'] . '/utils/database.php');
    $pdo = get_pdo_connection();

    // use the consults preparaded to avoid attacks SQL
    $sql = "SELECT * FROM rides WHERE start_from = ? OR end_to = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$fromLocation, $toLocation]);
    
    // Errors handling of data base
    if ($stmt->rowCount() > 0) {
        $rides = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode(["success" => true, "rides" => $rides]);
    } else {
        echo json_encode(["success" => false, "message" => "No rides found for the given locations."]);
    }
} else {
    // Error mesage if the fields "From" y "To" isn't.
    echo json_encode(["success" => false, "message" => "Please provide both 'fromLocation' and 'toLocation' parameters."]);
}
?>
