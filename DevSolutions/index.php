<?php

require_once "Controller/livroController.php";

$livroController = new LivroController();
$route = $_GET["route"] ?? "";

switch($route){
    case "livro/telaCadastro":
        $livroController->telaCadastro();
        break;

        case "livro/salvar": $livroController->cadastrar();
        break;

        case "livro/listar":
            $livroController->listarLivros();
            break;
        case "livro/telaEditar":
            $livroController->telaEDitar();
            break;
        case "livro/atualizar":
            $livroController->atualizar();
            break;
        case "usuario/excluir":
            $livroController->excluir();
            break;

            default:
            echo"pagina não encontrada";
            break;
}