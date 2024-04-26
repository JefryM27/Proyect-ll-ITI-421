<?php
require($_SERVER['DOCUMENT_ROOT'] . '/utils/database.php');
//capture the values
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $lastname = $_POST['lastname'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    //Hashing the password
    $hashedPassword = md5($password);
    $pdo = get_pdo_connection();
    $sql = "INSERT INTO users (name, last_name, phone, username, password) VALUES (?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([$name, $lastname, $phone, $username, $hashedPassword])) {
        echo "<script>alert('Registro exitoso.'); window.location.href='/pages/login.php';</script>";
    } else {
        echo "<script>alert('Error al registrar usuario.');</script>";
    }
}
?>