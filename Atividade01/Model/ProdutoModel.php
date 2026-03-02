<?php

class ProdutoModel {

    public static function listar() {
        return $_SESSION['produtos'] ?? [];
    }

    public static function salvar($produto) {
        $_SESSION['produtos'][] = $produto;
    }

    public static function buscar($id) {
        return $_SESSION['produtos'][$id];
    }

    public static function atualizar($id, $produto) {
        $_SESSION['produtos'][$id] = $produto;
    }

    public static function excluir($id) {
        unset($_SESSION['produtos'][$id]);
        $_SESSION['produtos'] = array_values($_SESSION['produtos']);
    }
}