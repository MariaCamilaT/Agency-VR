<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conex = mysqli_connect("localhost", "root", "", "ventas", 3306);

if (!$conex) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>