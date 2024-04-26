<?php
function get_pdo_connection(){
  $server = "localhost";
  $user = "Jefry";
  $pass = "m0r3r@27";
  $db = "ticos_rides";
  try {
      $pdo = new PDO("mysql:host=$server;dbname=$db", $user, $pass);
      //Set the PDO error mode to exception
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $pdo;
  } catch(PDOException $e) {
      die("ERROR: Could not connect. " . $e->getMessage());
  }
}

