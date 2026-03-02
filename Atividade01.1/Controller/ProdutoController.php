<?php

session_start(); //banco de dados

require_once'./Model/UsuarioModel.php';

class UsuarioController{

    public function telaCadastro(){
        require "View/ProdutoCadastrar.php";
    }

    public function cadastrar(){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $quantidade = $_POST['quantidade'];
        $validade = $_POST['validade'];



        $Produto = new Produto($nome,$email,$quantidade,$validade);
        $Produto->salvar();
        header('Location: /PB_php /MVCExemplo/produto/telaCadastro');

        exit;
    }

    public function listarUsuarios(){
        $Produtos = Produto ::listar();
        echo "<pre>";
        print_r($usuarios);
        echo "<pre>";
        require "view/ProdutoListar.php";
    }
    public function telaEditar(){
        $Produto = Produto::buscar($_GET['id']);
        require 'View/usuarioEditar.php';
    }
    public function atualizar(){
        $Produto = new Produto($_POST['nome'], $_POST['email']);
        $Produto ->atualizar($_GET['id']);
        header('Location: /PB_php/MVCexemplo/produto/telaEditar?id='.($_GET['id']));
        exit;
    }
    public function excluir(){
        Produto::excluir($_GET['id']);
        header('Location: PB_php/MVCexemplo/produto/excluir');
        exit;
    }
}