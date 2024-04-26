<?php
session_start();//start sesion in php
session_unset(); //remove all session variables
session_destroy();//delete or destroy the actually sesion

header("Location: /pages/login.php"); //redirect the user to the login page
exit();
?>