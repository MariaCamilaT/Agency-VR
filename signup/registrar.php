<?php
include("./conexion.php");
if (isset($_POST['registrar'])) {
    $URL = "http://localhost/www.ventas.com";

   if(
    strlen($_POST['name']) >= 1 &&
    strlen($_POST['email']) >= 1 &&
    strlen($_POST['password']) >= 1 
   ){
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $consulta = "INSERT INTO t_usuarios(nombre, email, clave_usuario)
        VALUES('$name','$email','$password')";
    $resultado = mysqli_query($conex, $consulta);
    if ($resultado) {  
        header('Location: ' . $URL . '/home/index.php');
    } else {
        ?>
           <h3 class="error">Ocurrió un error</h3>
        <?php
    } 
   } else {
        ?>
            <h3 class="error">Llena todos los campos</h3>
        <?php
   }
}
?>