<?php require ($_SERVER['DOCUMENT_ROOT'] . '/utils/header.php');
session_start() ?>
<title>Add Ride</title>
<nav class="navbar navbar-light justify-content-end mx-4">
  <form action="/Functions/Actions/users/login.php" method="post">
    <button type="submit" class="btn btn-outline-danger">Logout</button>
  </form>
</nav>
<div class="user-profile">
  <a href="/pages/settings.php"><span>Welcome</span><span
      class="text-orange"><?php echo $_SESSION['username']; ?></span>
    <img src="/pages/images/user.png" alt="User" class="user-image"></a>
</div>
<img src="/pages/images/image.png" alt="Car" class="img-fluid mx-auto d-block mt-3 mb-4">
<div class="card-body">
  <form id="rideForm" action="/Functions/Actions/rides/createRide.php" method="post">
    <div class="btn-group mb-3">
      <a href="dashboard.php" class="btn btn-primary">Dashboard</a>
      <button type="button" class="btn btn-primary active" disabled>Rides</button>
      <a href="/pages/settings.php" class="btn btn-primary">Settings</a>
    </div>
    <h2 class="mb-4">Rides</h2>
    <!--breadcrumb navigation -->
    <div class="navigation mt-3">
      <p><a href="dashboard.php">Dashboard</a> &gt; <a href="dashboard.php">Rides</a> &gt; Add
      </p>
    </div>
    <!--Form fields for adding a new ride -->
    <div class="mt-4">
      <label for="rideName" class="form-label">Ride Name</label>
      <input type="text" class="form-control" id="rideName" name="rideName" required>
    </div>
    <!--location inputs for the ride's start and end points -->
    <div class="row mt-3">
      <div class="col-md-6">
        <label for="startFrom" class="form-label">Start From</label>
        <input type="text" class="form-control" id="startFrom" name="startFrom" required>
      </div>
      <div class="col-md-6">
        <label for="end" class="form-label">End</label>
        <input type="text" class="form-control" id="end" name="end" required>
      </div>
    </div>
    <!--textarea for additional ride description -->
    <div class="mt-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" id="description" name="description" rows="2"
        placeholder="Add here the description of the ride" required></textarea>
    </div>
    <hr>
    <!--time input for departure and estimated arrival-->
    <h4>When</h4>
    <div class="row mt-3">
      <div class="col-md-6">
        <label for="departure" class="form-label">Departure</label>
        <input type="time" class="form-control" id="departure" name="departure" required>
        <label for="arrival" class="form-label">Estimated Arrival</label>
        <input type="time" class="form-control form-control-sm" id="arrival" name="arrival" required>
      </div>
      <!--checkbox options for selecting ride days -->
      <div class="col-md-6">
        <label class="form-label">Select Days</label>
        <div>
          <!--each day of the week can be selected individually-->
          <input type="checkbox" id="monday" name="monday" value="Monday">
          <label for="monday">Monday</label><br>
          <input type="checkbox" id="tuesday" name="tuesday" value="Tuesday">
          <label for="tuesday">Tuesday</label><br>
          <input type="checkbox" id="wednesday" name="wednesday" value="Wednesday">
          <label for="wednesday">Wednesday</label><br>
          <input type="checkbox" id="thursday" name="thursday" value="Thursday">
          <label for="thursday">Thursday</label><br>
          <input type="checkbox" id="friday" name="friday" value="Friday">
          <label for="friday">Friday</label><br>
          <input type="checkbox" id="saturday" name="saturday" value="Saturday">
          <label for="saturday">Saturday</label><br>
          <input type="checkbox" id="sunday" name="sunday" value="Sunday">
          <label for="sunday">Sunday</label>
        </div>
      </div>
    </div>
    <!--buttons to submit or reset the form data-->
    <div class="mt-4 mb-3 text-center">
      <button type="submit" class="btn btn-primary">Add Ride</button>
      <button type="reset" class="btn btn-secondary">Reset</button>
    </div>
  </form>
</div>
<script src="/public/js/validationRide.js"></script>
</body>

</html>