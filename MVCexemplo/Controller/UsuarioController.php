<?php

session_start(); //banco de dados

require_once'./Model/UsuarioModel.php';

class UsuarioController{

    public function telaCadastro(){
        require "View/usuarioCadastrar.php";
    }

    public function cadastrar(){
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $usuario = new Usuario($nome,$email);
        $usuario->salvar();
        header('Location: /PB_php /MVCExemplo/usuario/telaCadastro');

        exit;
    }

    public function listarUsuarios(){
        $usuarios = Usuario ::listar();
        echo "<pre>";
        print_r($usuarios);
        echo "<pre>";
        require "view/usuarioListar.php";
    }
}