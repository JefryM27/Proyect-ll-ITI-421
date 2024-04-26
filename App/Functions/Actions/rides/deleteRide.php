<?php
//check if a ride ID has been sent
if (isset($_GET['rideId'])) {
    //Delete the ride
    require_once($_SERVER['DOCUMENT_ROOT'] . '/utils/database.php');
    $pdo = get_pdo_connection();

    $rideId = $_GET['rideId'];
    $sql = "DELETE FROM rides WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([$rideId])) {
        //Redirect user back to dashboard after deletion
        header("Location: /pages/rides/dashboard.php");
        exit();
    } else {
        //If there is an error in deletion, display an error message
        echo "Error: Could not delete ride.";
    }
} else {
    //If no ride ID was provided, display an error message
    echo "Error: Ride ID not provided.";
}
