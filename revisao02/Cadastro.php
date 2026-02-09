<?php
    session_start();

    class Usuario{
        private $nome;
        private $sobrenome;
        private $nota;
        private $idade;
        
        public function __construct($nome, $sobrenome, $nota, $idade){
            $this->nome = $nome;
            $this->sobrenome = $sobrenome;
            $this->nota = $nota;
            $this->idade = $idade;
        }

        public function salvar(){
            //criar o array se ainda nao existir
            if(!isset($_SESSION["usuarios"])){
                $_SESSION["usuarios"]=[];
                 
            }
            $_SESSION["usuarios"][]=[
                'nome'=> $this ->nome,
                'sobrenome'=> $this -> sobrenome,
                'nota'=> $this -> nota,
                'idade'=> $this -> idade,
            ];
        }
    }
    if($_SERVER["REQUEST_METHOD"]== "POST"){
        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $nota = $_POST["nota"];
        $idade = $_POST["idade"];
        
        $usuario = new Usuario($nome, $sobrenome, $nota, $idade);
        $usuario->salvar();
    }
    if(isset($_GET["reset"])){
        
    session_destroy();
    }
    ?>
<!DOCTYPE html>
<html lang= "pt-BR">
    <head>
        <meta charset= "UTF-8">
        <title>Formulário</title>
</head>
<body>
    <h2 style="color:black; font-family:Arial"> Cadastro de Aluno</h2>
    <form  action= "" method="POST" style="background:#f2f2f2; padding: 15px border-radius: 8px;
    width: 300px">
    Nome: 
    <input type="text" name= "nome" value="" style="width:100%; margin-bottom:10px"><br>
    Sobrenome: 
    <input type="text" name= "sobrenome" value="" style="width:100%; margin-bottom:10px"><br>
    Nota:
    <input type="number" id="tentacles" name="nota" min="1" max="10" /><br>
    Idade:
   <input id="date" type="date" name="idade" /><br>
    <button type="submit" style="background: withe; color:black; padding: 5px 10 px;">Cadastrar</button>
    <button type="reset" style="background: withe; color: black; padding: 5px 10px;">Limpar</button
</form>
<?php if(isset($_SESSION["usuarios"])) : ?>
    <table border="1">
        <thead>
        <tr> 
            <th>Nome</th>
            <th>Sobrenome</th>
            <th> Nota <th>
            <th>Idade</th>
         </tr>
         <tbody>
            <?php foreach($_SESSION['usuarios'] as $usuario):?>

            <tr>
                <td><?= $usuario['nome']?></td>
                <td><?= $usuario['sobrenome']?></td>
                <td><?= $usuario['nota']?></td>
                <td><?= $usuario['idade']?></td>
            </tr>
            <?php endforeach?>
        </tbody>
      </thead>
     </table>
     <?php endif; ?>


    </body>
</html>