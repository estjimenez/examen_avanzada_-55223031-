<?php
require_once 'controllers/NotaController.php';

$action = $_GET['action'] ?? 'registrar';

$controller = new NotaController();

if ($action == 'listar') {
    $controller->listar();
} else {
    $controller->registrar();
}