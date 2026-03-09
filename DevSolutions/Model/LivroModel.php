<?php


require_once"./database/Database.php";

class Livro{
    private $titulo;
    private $autor;
    private $ano_publicação;
    private $editora;

    public function __construct($titulo, $autor, $ano_publicação,$editora){
       $this->titulo = $titulo;
       $this->autor = $autor;
       $this->ano_publicação = $ano_publicação;
       $this->editora = $editora;
    }

    public function salvar(){
        $pdo =Database :: conectar();
        $sql = "INSERT INTO livros (titulo, autor, ano_publicação, editora) VALUES (:titulo, :autor, :ano_publicação, :editora)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['titulo' => $this->titulo, 'autor' => $this->autor, 'ano_publicação' => $this->ano_publicação, 'editora'=> $this->editora]);
    }

    public static function listar(){
        $pdo = Database::conectar();
        $stmt= $pdo->query("SELECT *FROM livros");
        return $stmt->fetchALL(PDO::FETCH_ASSOC);

    }
     public static function buscar($id){
      $pdo = Database::conectar();
      $stmt = $pdo->prepare("SELECT * FROM livros WHERE id= :id");
      $stmt ->execute(['id'=> $id]);
      return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizar($id){
        $pdo = Database::conectar();
        $stmt = $pdo->prepare("UPDATE livros SET titulo = :titulo, :autor, :ano_publicação, :editora WHERE id = :id");
        $stmt ->execute(['id'=> $id, 'titulo' =>$this->titulo, 'autor'=> $this ->autor, 'ano_publicação'=> $this -> ano_publicação, 'editora'=> $this->editora]);

    }
    public function telaEditar(){
        $livros - Livro:: buscar($_GET['id']);
        require 'View/livroEditar.php';
    }
    public static function excluir($id){
        $pdo = Database::conectar();
        $stmt = $pdo->prepare("DELETE FROM livros WHERE id = :id");
        $stmt->execute(["id"=>$id]);
    }
}

