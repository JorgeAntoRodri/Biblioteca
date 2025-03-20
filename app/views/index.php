<?php
require_once __DIR__ . "/../../config.php";
require_once __DIR__ . "/../models/Libro.php";

$libroModel = new Libro($conn);
$libros = $libroModel->obtenerLibros();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Libros</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        a {
            display: inline-block;
            margin-bottom: 10px;
            padding: 8px 16px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }

        a:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        button {
            padding: 6px 12px;
            margin-left: 5px;
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #c82333;
        }

        form {
            display: inline;
        }
    </style>
</head>
<body>
    <h1>Lista de Libros</h1>
    <a href="create.php">Agregar Nuevo Libro</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Autor</th>
            <th>Año</th>
            <th>Acciones</th>
        </tr>
        <?php while ($libro = $libros->fetch_assoc()) { ?>
            <tr>
                <td><?= $libro["id"] ?></td>
                <td><?= $libro["titulo"] ?></td>
                <td><?= $libro["autor"] ?></td>
                <td><?= $libro["año"] ?></td>
                <td>
                    <a href="edit.php?id=<?= $libro['id'] ?>">Editar</a>
                    <form method="post" action="../controllers/LibroController.php">
                        <input type="hidden" name="id" value="<?= $libro['id'] ?>">
                        <button type="submit" name="eliminar">Eliminar</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
