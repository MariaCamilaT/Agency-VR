<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('../../config.php');

// Se envía la información que obtiene el input a la base de datos, donde $email 
// representa el nombre del input que ya fue nombrado en html, y "email" es el nombre de 
// la casilla en la base de datos de MySQL
$email = $_POST['email'];
$clave = $_POST['clave_usuario'];

// Inicializar contador y preparar consulta SQL para seleccionar al usuario que coincida con el email
// y contraseña indicados
$contador = 0;

$sql = "SELECT * FROM t_usuarios WHERE email = :email AND clave_usuario = :clave_usuario";
$query = $pdo->prepare($sql);
$query->bindParam(':email', $email);
$query->bindParam(':clave_usuario', $clave);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

// Si hay un usuario que coincida con el email y la clave, el contador suma 1
foreach ($usuarios as $usuario) {
    $contador++;
}

if ($contador == 0) {
    header('Location: ' . $URL . '/login');
} else {
    session_start();
    $_SESSION['sesion_email'] = $email;
    header('Location: ' . $URL . '/home/index.php');
}
?>
