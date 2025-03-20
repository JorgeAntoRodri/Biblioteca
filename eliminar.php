<?php
session_start();
if (!isset($_SESSION['logueado'])) {
    header('Location: index.php');
    exit();
}

include 'index.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $controlador->eliminarLibro($id);
    header('Location: index.php');
} else {
    echo 'ID no proporcionado.';
}

?>
