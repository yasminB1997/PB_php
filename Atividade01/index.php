<?php
session_start();

require_once 'controllers/ProdutoController.php';

$controller = new ProdutoController();


$acao = $_GET['acao'] ?? 'listar';

switch ($acao) {
    case 'cadastrar':
        $controller->cadastrar();
        break;

    case 'salvar':
        $controller->salvar();
        break;

    case 'editar':
        $controller->editar();
        break;

    case 'atualizar':
        $controller->atualizar();
        break;

    case 'excluir':
        $controller->excluir();
        break;

    default:
        $controller->listar();
        break;
}