<?php
require_once 'controller/ControllerSoma.php';

$acao = isset($_GET['action']) ? $_GET['action'] : 'index';

$controller = new ControllerSoma();

switch ($acao) {
    case 'index':
        $controller->index();
        break;
    case 'calcularSoma':
        $controller->calcularSoma();
        break;
    default:
        # Página não encontrada
        echo "404 - Not Found";
        break;
}

