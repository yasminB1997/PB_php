<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Editar</title>
</head>
<body>
    <h2> Editar Livro</h2>

    <a href= "/PB_php/DevSolutions/livro/listar">Ir para a tela Listar</a>
    <form method ="POST" action="atualizar?id=<?= $_GET['id']?>">
        <input type="text" name="id" value="<?htmlspecialchars($_GET['id'])?>"disabled>
        <input type = "text" name= "titulo" value="<?=htmlspecialchars($livro['titulo'])?>"require>
            <input type="text" name="autor" value="<?=htmlspecialchars($livro['autor'])?>"requiere>
            <input type="date" name="ano_publicação" value="<?=htmlspecialchars($livro['data_publicação'])?>"requiere>
            <input type="text" name="editora" value="<?=htmlspecialchars($livro['editora'])?>"requiere>
            <button type="submit">Enviar</button>

</body>
</html>