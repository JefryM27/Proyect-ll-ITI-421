<?php require ($_SERVER['DOCUMENT_ROOT'] . '/utils/header.php'); ?>
<title>Login</title>
<div class="card-body">
  <!--logo centrado -->
  <img src="/pages/images/image.png" alt="Car" class="img-fluid mx-auto d-block mb-4">
  <!--Formulario de inicio de sesión -->
  <form id="loginForm" action="/Functions/Actions/users/loginAuthenticate.php" method="post">
    <div class="mb-3">
      <label for="username" class="form-label">Name</label>
      <!-- Campo de entrada para el nombre de usuario -->
      <input class="form-control" id="username" name="username" required>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <!-- Campo de entrada para la contraseña -->
      <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <!-- Botón de inicio de sesión -->
    <form action="/pages/dashboard.php" method="post">
      <div class="rich-text">
        <button type="submit" class="btn btn-success">Login</button>
      </div>
    </form>
  </form>
  <hr>
  <!-- Enlace a la página de registro para nuevos usuarios -->
  <p class="text-center">¿Not an user? <a href="register.php">Register here</a></p>
</div>
</body>

</html>