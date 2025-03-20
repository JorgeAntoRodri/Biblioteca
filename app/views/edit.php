<?php
require_once __DIR__ . "/../../config.php"; // Configuración de la base de datos
require_once __DIR__ . "/../models/Libro.php"; // Modelo Libro

// Verificar si se pasa un 'id' a través de la URL
if (isset($_GET["id"]) && is_numeric($_GET["id"])) {
    $id = $_GET["id"];
    
    // Crear el objeto Libro
    $libroModel = new Libro($conn);
    
    // Obtener el libro por ID
    $libro = $libroModel->obtenerLibroPorId($id);
    
    // Verificar si el libro fue encontrado
    if (!$libro) {
        die("El libro con ID $id no existe.");
    }
} else {
    die("No se ha proporcionado un ID válido.");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Libro</title>

</head>
<body>
    <h1>Editar Libro</h1>
    <form action="../controllers/LibroController.php" method="post">
        <input type="hidden" name="id" value="<?= $libro['id'] ?>">

        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" value="<?= $libro['titulo'] ?>" required><br>

        <label for="autor">Autor:</label>
        <input type="text" name="autor" id="autor" value="<?= $libro['autor'] ?>" required><br>

        <label for="año">Año:</label>
        <input type="number" name="año" id="año" value="<?= $libro['año'] ?>" required><br>

        <button type="submit" name="editar">Actualizar</button>
    </form>
</body>
</html>
