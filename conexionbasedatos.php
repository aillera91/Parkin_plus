<?php
$servername = "localhost";
$username = "root";
$password = "";
$basedatos = "parking_plus_db";

$conexion = new mysqli($servername, $username, $password, $basedatos);

if ($conexion->connect_error) {
    die("La conexion a la base de datos tuvo un error: " . $conexion->connect_error);
}