
<?php
require_once 'config/database.php';

class Nota {
    private $conn;
    private $table = "notas";

    public function __construct() {
        $database = new Database();
        $this->conn = $database->connect();
    }

    public function insertar($estudiante, $descripcion, $nota) {
        $sql = "INSERT INTO {$this->table} (estudiante, descripcion, nota) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$estudiante, $descripcion, $nota]);
    }

    public function obtenerTodas() {
        $sql = "SELECT * FROM {$this->table}";
        $stmt = $this->conn->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function promedio() {
        $sql = "SELECT AVG(nota) as promedio FROM {$this->table}";
        $stmt = $this->conn->query($sql);
        return $stmt->fetch(PDO::FETCH_ASSOC)['promedio'];
    }
}