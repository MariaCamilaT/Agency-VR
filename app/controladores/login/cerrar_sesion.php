<?php 
include('../../config.php');
session_start();

// Destruir la sesión si existe
if(isset($_SESSION['sesion_email'])){
    session_destroy();
}

// Redirigir al usuario a la página login
header('Location: ' . $URL . '/login/index.php'); 
exit();
?>
