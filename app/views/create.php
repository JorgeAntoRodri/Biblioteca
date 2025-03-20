<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Libro</title>
</head>
<body>
    <h1>Agregar Libro</h1>
    <form action="../controllers/LibroController.php" method="post">
        <label>Título: <input type="text" name="titulo" required></label><br>
        <label>Autor: <input type="text" name="autor" required></label><br>
        <label>Año: <input type="number" name="año" required></label><br>
        <button type="submit" name="crear">Agregar</button>
    </form>
</body>
</html>
