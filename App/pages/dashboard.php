<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

  <div class="container">
    <div class="mt-2">
      <img src="images/image.png" alt="Image 1" class="img-fluid">
    </div>

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="add-rides.php">Rides</a></li>
        <li class="breadcrumb-item"><a href="settings.html">Settings</a></li>
      </ol>
    </nav>

    <!-- Page Title and Welcome Message -->
    <h1 class="mt-4">Dashboard</h1>
    <a href="pagina3.html" class="text-muted mt-2">Dashboard ></a>
    <div class="d-flex justify-content-end mt-2">
      <p class="mr-3"> <span>Welcome: </span> JefryM27</p> <img src="Images/user.png" alt="Image 2" class="img-fluid">
    </div>

    <!-- Section for Rides -->
    <h3>My Rides</h3>

    <div class="border mt-4 p-4">
      <p class="text-muted">Your current list of Rides</p>
      <!-- Table for Displaying Rides -->
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Name</th>
            <th>Start</th>
            <th>End</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Brete</td>
            <td>Santa Rosa</td>
            <td>Cuidad Quesada</td>
            <td>
              <button type="button" class="btn btn-outline-primary btn-sm">Edit</button>
              <button type="button" class="btn btn-outline-danger btn-sm">Delete</button>
            </td>
          </tr>
          <tr>
            <td>Pa la choza</td>
            <td>Ciudad Quesada</td>
            <td>Santa Rosa</td>
            <td>
              <button type="button" class="btn btn-outline-primary btn-sm">Edit</button>
              <button type="button" class="btn btn-outline-danger btn-sm">Delete</button>
            </td>
          </tr>
          <tr>
            <td>Una Vueltilla</td>
            <td>Santa Rosa</td>
            <td>Muelle</td>
            <td>
              <button type="button" class="btn btn-outline-primary btn-sm">Edit</button>
              <button type="button" class="btn btn-outline-danger btn-sm" onclick="window.location.href = 'dashboard-delete.html';">Delete</button>

            </td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.wrap.min.js"></script>
</body>

</html>
