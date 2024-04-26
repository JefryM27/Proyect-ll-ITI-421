<?php require ($_SERVER['DOCUMENT_ROOT'] . '/utils/header.php');
session_start(); ?>
<title>Dasboard</title>
<nav class="navbar navbar-light justify-content-end mx-4">
  <form action="/Functions/Actions/users/login.php" method="post">
    <button type="submit" class="btn btn-outline-danger">Logout</button>
  </form>
</nav>
<div class="user-profile">
  <a href="/pages/settings.php"><span class="">Welcome </span><span
      class="text-orange"><?php echo $_SESSION['username']; ?></span>
    <img src="/pages/images/user.png" alt="User" class="user-image"></a>
</div>
<img src="/pages/images/image.png" alt="Car" class="img-fluid mx-auto d-block mt-3 mb-4">
<div class="card-body">
  <div class="btn-group mb-3">
    <button type="button" class="btn btn-primary active" disabled>Dashboard</button>
    <a href="add-rides.php" class="btn btn-primary">Rides</a>
    <a href="/pages/settings.php" class="btn btn-primary">Settings</a>
  </div>
  <h2 class="mb-4">Dashboard</h2>
  <div class="navigation mt-3">
    <p>Dashboard &gt; </p>
  </div>
  <h5 class="mb-4">My Rides</h5>
  <!-- Include the PHP file to show the list of rides -->
  <?php include ($_SERVER['DOCUMENT_ROOT'] . '/Functions/model/showRides.php'); ?>
</div>
</body>

</html>