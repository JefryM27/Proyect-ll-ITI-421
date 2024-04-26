<?php
session_start();

//chek if the form data was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        //get the form data
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Validate the form data
        if (!empty($username) && !empty($password)) {
            //Password hash
            $hashedPassword = md5($password);

            //Verify credentials in the database
            require_once($_SERVER['DOCUMENT_ROOT'] . '/utils/database.php');
            $pdo = get_pdo_connection();

            //verify the login
            $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$username, $hashedPassword]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                $_SESSION['username'] = $username;
                $_SESSION['user_id'] = $user['id'];
                header("Location: /pages/dashboard.php");
                exit;
            } else {
                echo "<script>alert('Error de inicio de sesión. Nombre de usuario o contraseña incorrectos.'); window.location.href='/pages/users/login.php';</script>";
            }
        } else {
            echo "<script>alert('Por favor, completa todos los campos del formulario.'); window.location.href='/pages/users/login.php';</script>";
        }
    }
}
?>
