<?php

require_once 'controller/SomaController.php';

$acao = isset($_GET['action']) ? $_GET['action'] : 'index';

$controller = new SomaController();

switch ($acao) {
    case 'index':
        $controller->index();
        break;
    case 'calcularSoma':
        $controller->calcularSoma();
        break;
    default:
        // Página não encontrada
        echo "404 - Not Found";
        break;
}
