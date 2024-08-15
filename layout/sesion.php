<?php
session_start();
if (isset($_SESSION['sesion_email'])) {
    $email_sesion = $_SESSION['sesion_email'];
    $sql = "SELECT * FROM t_usuarios WHERE email = :email";
    // Preparar y ejecutar la consulta
    $query = $pdo->prepare($sql);
    $query->bindParam(':email', $email_sesion, PDO::PARAM_STR);
    $query->execute();
    $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($usuarios as $usuario) {
        $nombres = $usuario['nombre']; // Asegúrate de que 'nombre' es la columna correcta
        // Haz lo que necesites con $nombres
    }
} else {
    header('Location: ' . $url . '/login');
    exit; // Asegúrate de salir después de redireccionar
}
?>
