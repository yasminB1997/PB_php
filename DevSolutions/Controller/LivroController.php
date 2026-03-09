<?php

session_start();

require_once'./Model/LivroModel.php';

class LivroController{

    public function telaCadastro(){
        require "View/livroCadastrar.php";
    }

    public function cadastrar(){
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $ano_publicação = $_POST['ano_publicação'];
        $editora = $_POST['editora'];

        $livro = new Livro($titulo,$autor,$ano_publicação,$editora);
        $livro->salvar();
        header('Location: /PB_php/DevSolutions/livro/telacadastro');

        exit;
    }

    public function listarLivros(){
        $livros = Livro ::listar();
        echo "<pre>";
        print_r($livros);
        echo"<pre>";
        require 'view/livroListar.php';
    }

    public function telaEditar(){
        $livro = Livro ::buscar($_GET['id']);
        require 'View/livroEditar.php';
     
    }
    public function atualizar(){
        $livro = new Livro ($_POST['titulo'], $_POST['autor'], $_POST['ano_publicação'], $_POST['editora']);
        $livro ->atualizar($_GET['id']);
        header("Location: PB_php/DevSolutions/livro/telaEditar?id=".($_GET['id']));
    
    }
    public function excluir(){
        Livro:: excluir($_GET['id']);
        header('Location: PB_php/DevSolutions/livro/excluir');
        exit;
    }
}