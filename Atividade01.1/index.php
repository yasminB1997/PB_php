<?php


require_once './Controller/ProdutoController.php';


$produtoController = new ProdutoController();


$route = $_GET['route'] ?? 'produto/listar'; 

switch ($route) {
    case "produto/telaCadastro":
        $produtoController->telaCadastro();
        break;

    case "produto/salvar": 
        $produtoController->cadastrar();
        break;

    case "produto/listar":
        $produtoController->listarProdutos(); 
        break;

    case "produto/telaEditar":
        $produtoController->telaEditar();
        break;

    case "produto/atualizar":
        $produtoController->atualizar();
        break;

    case "produto/excluir":
        $produtoController->excluir();
        break;

    default:
        echo "<h1>404 - Página de Produto não encontrada</h1>";
        break;
}