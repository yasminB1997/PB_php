<?php

class Produto {
    private $nome;
    private $valor;
    private $quantidade;
    private $validade;

    public function __construct($nome, $valor, $quantidade, $validade) {
        $this->nome = $nome;
        $this->valor = $valor;
        $this->quantidade = $quantidade;
        $this->validade = $validade;
    }

    public function salvar() {
        if (!isset($_SESSION['Produtos'])) {
            $_SESSION['Produtos'] = [];
        }

        $_SESSION['Produtos'][] = [
            'nome' => $this->nome,
            'valor' => $this->valor,
            'quantidade' => $this->quantidade,
            'validade' => $this->validade
        ];
    }

    public static function listar() {
        return $_SESSION['Produtos'] ?? [];
    }

    public static function buscar($id) {
        return $_SESSION['Produtos'][$id] ?? null; 
    }

    public function atualizar($id) {
        if (isset($_SESSION['Produtos'][$id])) {
            $_SESSION['Produtos'][$id] = [
                'nome' => $this->nome,
                'valor' => $this->valor,
                'quantidade' => $this->quantidade,
                'validade' => $this->validade
            ];
        }
    }

    public static function excluir($id) {
        if (isset($_SESSION['Produtos'][$id])) {
            unset($_SESSION['Produtos'][$id]);
            
            $_SESSION['Produtos'] = array_values($_SESSION['Produtos']);
        }
    }
}

