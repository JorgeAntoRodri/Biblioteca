<?php
class Libro {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function obtenerLibros() {
        $sql = "SELECT * FROM libros";
        return $this->conn->query($sql);
    }

    public function agregarLibro($titulo, $autor, $año) {
        $titulo = $this->conn->real_escape_string($titulo);
        $autor = $this->conn->real_escape_string($autor);
        $año = (int)$año;  // Asegúrate de que sea un número entero

        $sql = "INSERT INTO libros (titulo, autor, año) VALUES ('$titulo', '$autor', $año)";

        if ($this->conn->query($sql) === FALSE) {
            echo "Error al agregar el libro: " . $this->conn->error;
        }
    }

    public function obtenerLibroPorId($id) {
        $id = (int)$id;  // Asegúrate de que sea un número entero
        $sql = "SELECT * FROM libros WHERE id = $id";
        return $this->conn->query($sql)->fetch_assoc();
    }

    public function actualizarLibro($id, $titulo, $autor, $año) {
        $id = (int)$id;  // Asegúrate de que sea un número entero
        $titulo = $this->conn->real_escape_string($titulo);
        $autor = $this->conn->real_escape_string($autor);
        $año = (int)$año;  // Asegúrate de que sea un número entero

        $sql = "UPDATE libros SET titulo='$titulo', autor='$autor', año=$año WHERE id=$id";
        if ($this->conn->query($sql) === FALSE) {
            echo "Error al actualizar el libro: " . $this->conn->error;
        }
    }

    public function eliminarLibro($id) {
        $id = (int)$id;  // Asegúrate de que sea un número entero
        $sql = "DELETE FROM libros WHERE id=$id";
        return $this->conn->query($sql);
    }
}
?>
