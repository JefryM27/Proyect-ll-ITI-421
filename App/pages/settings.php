<?php
require ($_SERVER['DOCUMENT_ROOT'] . '/utils/header.php');
require ($_SERVER['DOCUMENT_ROOT'] . '/Functions/model/getSettings.php');
?>
<title>Settings</title>
<nav class="navbar navbar-light justify-content-end mx-4">
    <form action="/Functions/Actions/users/login.php" method="post">
        <button type="submit" class="btn btn-outline-danger">Logout</button>
    </form>
</nav>
<img src="/pages/images/image.png" alt="Car" class="img-fluid mx-auto d-block mt-3 mb-4">
<div class="card-body">
    <div class="btn-group mb-3" role="group" aria-label="Basic example">
        <a href="/pages/dashboard.php" class="btn btn-primary">Dashboard</a>
        <a href="/pages/addRides.php" class="btn btn-primary">Rides</a>
        <button type="button" class="btn btn-primary" disabled>Settings</button>
    </div>
    <h2 class="mb-4">Settings</h2>
    <!--breadcrumb navigation-->
    <div class="navigation mt-3">
        <p><a href="/pages/dashboard.php">Dashboard</a> &gt; Settings</p>
    </div>
    <!--form fields for user settings like name and average speed-->
    <form id="settingsForm" action="/Functions/Actions/users/editUser.php" method="post">
        <div class="mb-3">
            <label for="fullName" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullName" name="fullName"
                value="<?= htmlspecialchars($user_settings['full_name']) ?>">
        </div>
        <div class="mb-3">
            <label for="speedAverage" class="form-label">Speed Average</label>
            <input type="text" class="form-control" id="speedAverage" name="speedAverage"
                value="<?= htmlspecialchars($user_settings['speed_average']) ?>">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">About Me</label>
            <textarea class="form-control" id="description" name="description" rows="2"
                placeholder="Something about me goes here"><?= htmlspecialchars($user_settings['description']) ?></textarea>
        </div>
        <div>
            <!--action buttons for saving or canceling changes -->
            <a href="/pages/dashboard.php" class="btn btn-danger">Cancel</a>
            <button type="submit" class="btn btn-success ms-2">Save</button>
        </div>
    </form>
</div>
</body>

</html>