<?php
require_once 'models/Nota.php';

class NotaController {
    public function registrar() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $estudiante = $_POST['estudiante'];
            $descripcion = $_POST['descripcion'];
            $nota = floatval($_POST['nota']);

            $notaModel = new Nota();
            $notaModel->insertar($estudiante, $descripcion, $nota);
            header("Location: index.php?action=listar");
        } else {
            include 'views/form.php';
        }
    }

    public function listar() {
        $notaModel = new Nota();
        $notas = $notaModel->obtenerTodas();
        $promedio = $notaModel->promedio();
        include 'views/list.php';
    }
}