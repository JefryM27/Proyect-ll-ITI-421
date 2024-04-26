<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/utils/database.php');
$pdo = get_pdo_connection();
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// Verificar si el usuario está autenticado
if (!isset($_SESSION['user_id'])) {
    header("Location: /pages/login.php");
    exit();
}

// Prepare the SQL query to get all the rides
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM rides WHERE user_id = ? ";
$stmt = $pdo->prepare($sql);
$stmt->execute([$user_id]);
$rides = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="card mt-2">
    <label class="form-label ms-3 my-2">Your current list of Rides</label>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Start</th>
                        <th>End</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!--Loop through PHP to generate table rows -->
                    <?php foreach ($rides as $ride) : ?>
                        <tr>
                            <td><?php echo $_SESSION['username']; ?></td>
                            <td><?php echo $ride['start_from']; ?></td>
                            <td><?php echo $ride['end_to']; ?></td>
                            <td>
                                <!--Pass ride ID to editRides.php -->
                                <a href="/pages/edit-rides.php?rideId=<?php echo $ride['id']; ?>" class="btn btn-primary">Edit</a>
                                <!-- Add delete functionality -->
                                <a href="/Functions/Actions/rides/deleteRide.php?rideId=<?php echo $ride['id']; ?>" class="btn btn-danger" onclick="confirmDelete()">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="text-end mt-3">
            <a href="/pages/add-rides.php" class="btn btn-success">Add</a>
        </div>
    </div>
</div>