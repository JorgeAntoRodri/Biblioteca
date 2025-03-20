<?php

// agregar.php - Agregar un nuevo libro
session_start();
if (!isset($_SESSION['logueado'])) {
    header('Location: index.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $anio = $_POST['anio'];

    include 'index.php';
    $controlador->agregarLibro($titulo, $autor, $anio);
    header('Location: index.php');
}

echo '<h2>Agregar Libro</h2>
      <form method="POST" action="agregar.php">
        <label>Título:</label>
        <input type="text" name="titulo" required>
        <label>Autor:</label>
        <input type="text" name="autor" required>
        <label>Año:</label>
        <input type="number" name="anio" required>
        <button type="submit">Guardar</button>
      </form>';
?>

<?php