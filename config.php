<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "libreria";  // Asegúrate de que esta base de datos exista

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
