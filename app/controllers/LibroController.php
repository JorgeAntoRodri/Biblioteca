<?php
require_once "../models/Libro.php";
require_once "../../config.php";

$libroModel = new Libro($conn);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["crear"])) {
        $libroModel->agregarLibro($_POST["titulo"], $_POST["autor"], $_POST["año"]);
    } elseif (isset($_POST["editar"])) {
        $libroModel->actualizarLibro($_POST["id"], $_POST["titulo"], $_POST["autor"], $_POST["año"]);
    } elseif (isset($_POST["eliminar"])) {
        $libroModel->eliminarLibro($_POST["id"]);
    }
    header("Location: ../../index.php");
}
?>
