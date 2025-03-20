<?php
// editar.php - Editar un libro existente
session_start();
if (!isset($_SESSION['logueado'])) {
    header('Location: index.php');
    exit();
}

include 'index.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $anio = $_POST['anio'];

    $controlador->actualizarLibro($id, $titulo, $autor, $anio);
    header('Location: index.php');
}

$id = $_GET['id'];
$libro = null;
foreach ($libros as $l) {
    if ($l['id'] == $id) {
        $libro = $l;
        break;
    }
}

if ($libro) {
    echo '<h2>Editar Libro</h2>
          <form method="POST" action="editar.php">
            <input type="hidden" name="id" value="'.$libro['id'].'">
            <label>Título:</label>
            <input type="text" name="titulo" value="'.$libro['titulo'].'" required>
            <label>Autor:</label>
            <input type="text" name="autor" value="'.$libro['autor'].'" required>
            <label>Año:</label>
            <input type="number" name="anio" value="'.$libro['anio'].'" required>
            <button type="submit">Actualizar</button>
          </form>';
} else {
    echo 'Libro no encontrado.';
}
?>

<?php
