<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/utils/database.php');
$pdo = get_mysql_connection();
// Prepare the SQL query to get all the rides
$sql = "SELECT * FROM rides";
$stmt = $pdo->prepare($sql);
$stmt->execute();
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
                            <td><?php echo $ride['ride_name']; ?></td>
                            <td><?php echo $ride['start_from']; ?></td>
                            <td><?php echo $ride['end_to']; ?></td>
                            <td>
                                <!--Pass ride ID to editRides.php -->
                                <a href="editRides.php?rideId=<?php echo $ride['id']; ?>" class="btn btn-primary">Edit</a>
                                <!-- Add delete functionality -->
                                <a href="../functions/deleteRide.php?rideId=<?php echo $ride['id']; ?>" class="btn btn-danger" onclick="confirmDelete()">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="text-end mt-3">
            <a href="addRides.html" class="btn btn-success">Add</a>
        </div>
    </div>
</div>