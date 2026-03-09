<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Livros</title>
</head>
<body>
    <a href="/PB_php/DevSolutions/livro/telaCadastro">Ir para a tela Cadastro</a>
    <h2>Livros</h2>
    <table border ="1">


    <tr>
        <th>Titulo</th>
        <th>Autor</th>
        <th>Ano publicação</th>
        <th>Editora</th>
        <th>Ações</th>

</tr>

<?php foreach ($livros as $id=> $u) : ?>
    <tr>
        <td><?= $u["titulo"]?></td>
        <td><?= $u["autor"]?></td>
        <td><?= $u["ano_publicação"]?></td>
        <td><?= $u["editor"]?></td>

        <td>
            <a href="/PB_php/DevSolucions/livro/telaEditar?id=<?= $u ["ID"]?>">Editar</a>

            <a href="/PB_php/DevSolutionsS/livro/excluir?id=<?= $u['ID']?>">Excluir</a>
</td>
</tr>
<?php endforeach; ?>

</table>
</body>
</html>