<?php

function get_pdo_connection(){
  $server = "localhost";
  $user = "Jefry";
  $pass = "m0r3r@27"; // Escapa el carácter especial '@'
  $db = "ticos_rides"; 
  $mysqli = new mysqli($server, $user, $pass, $db);

  // Verificar la conexión
  if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
  }

  return $mysqli;
}
?>
