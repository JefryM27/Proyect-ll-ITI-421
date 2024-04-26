<?php
// Incluimos el archivo createRide.php
require_once ($_SERVER['DOCUMENT_ROOT'] . '../Functions/Actions/rides/createRide.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Rides</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../Styles/rides-style.css">
</head>

<body>

  <div class="container">
    <div class="mt-2">
      <img src="Images/Image.png" alt="Imagen 1" class="img-fluid">
    </div>

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="add-rides.php">Rides</a></li>
        <li class="breadcrumb-item"><a href="settings.html">Settings</a></li>
      </ol>
    </nav>


    <h1>Rides</h1>
    <a href="add-rides.php" class="text-muted mt-2">Add</a> | <a href="edit-rides.php" class="text-muted mt-2">Edit</a>
    | <a href="see-ride.html" class="text-muted mt-2">See</a>

    <div class="d-flex justify-content-end mt-2">
      <p class="mr-3"> <span>Welcome: </span> JefryM27</p> <img src="Images/user.png" alt="Imagen 2" class="img-fluid">
    </div>

    <form action="../Functions/Actions/rides/createRide.php" method="post">
      <div class="row justify-content-center align-items-center g-2">
        <div class="col">
          <label for="rideName" class="form-label">Ride Name</label>
          <input type="text" class="form-control" id="rideName" name="rideName" required>
        </div>
      </div>
      <div class="row justify-content-center align-items-center g-2">
        <div class="col">
          <label for="startFrom" class="form-label">Start From</label>
          <input type="text" class="form-control" id="startFrom" name="startFrom" required>
        </div>
        <div class="col">
          <label for="end" class="form-label">End</label>
          <input type="text" class="form-control" id="end" name="end" required>
        </div>
      </div>
      <div class="row-cols-md-4 justify-content-center align-items-center g-2">
        <label for="description" class="form-label">Description</label>
        <div class="aboutMe">
          <textarea class="form-control" id="description" name="description" rows="2" required></textarea>
        </div>
      </div>
      <div class="row-cols-md-4 justify-content-center align-items-center g-2">
        <label for="user_id" class="form-label">User</label>
        <div class="aboutMe">
          <input type="number" class="form-control" id="user_id" name="user_id" required>
        </div>
      </div>

      <hr>
      <h2>When</h2>
      <div class="row justify-content-center align-items-center g-2">
        <div class="col">
          <label for="departure" class="form-label">Departure</label>
          <input type="time" class="form-control" id="departure" name="departure" required>
          <br>
          <label for="arrival" class="form-label">Estimated Arrival</label>
          <input type="time" class="form-control" id="arrival" name="arrival" required>
        </div>

        <div class="col">
          <h3>Select Days</h3>
          <div class="form-check">
            <input type="hidden" name="monday" value="0">
            <input class="form-check-input" type="checkbox" value="Monday" id="monday" name="days[]">
            <label class="form-check-label" for="monday">Monday</label>
          </div>
          <div class="form-check">
            <input type="hidden" name="tuesday" value="0">
            <input class="form-check-input" type="checkbox" value="Tuesday" id="tuesday" name="days[]">
            <label class="form-check-label" for="tuesday">Tuesday</label>
          </div>
          <div class="form-check">
            <input type="hidden" name="wednesday" value="0">
            <input class="form-check-input" type="checkbox" value="Wednesday" id="wednesday" name="days[]">
            <label class="form-check-label" for="wednesday">Wednesday</label>
          </div>
          <div class="form-check">
            <input type="hidden" name="thursday" value="0">
            <input class="form-check-input" type="checkbox" value="Thursday" id="thursday" name="days[]">
            <label class="form-check-label" for="thursday">Thursday</label>
          </div>
          <div class="form-check">
            <input type="hidden" name="friday" value="0">
            <input class="form-check-input" type="checkbox" value="Friday" id="friday" name="days[]">
            <label class="form-check-label" for="friday">Friday</label>
          </div>
          <div class="form-check">
            <input type="hidden" name="saturday" value="0">
            <input class="form-check-input" type="checkbox" value="Saturday" id="saturday" name="days[]">
            <label class="form-check-label" for="saturday">Saturday</label>
          </div>
          <div class="form-check">
            <input type="hidden" name="sunday" value="0">
            <input class="form-check-input" type="checkbox" value="Sunday" id="sunday" name="days[]">
            <label class="form-check-label" for="sunday">Sunday</label>
          </div>
        </div>
      </div>
      <br>
      <br>
      <br>
      <div class="row justify-content-center align-items-center g-2">
        <div class="col"><a href="dashboard.html">Cancel</a></div>
        <div class="col"><button type="submit" class="save">Add</button></div>
      </div>
    </form>


  </div>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.wrap.min.js"></script>
</body>

</html>