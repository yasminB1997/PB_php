<h2>Produtos Cadastrados</h2>

<a href="cadastrar">Novo Produto</a>

<table border="1" cellpadding="5">
    <tr>
        <th>Nome</th>
        <th>Preço</th>
        <th>Quantidade</th>
        <th>Validade</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($produtos as $id => $produto): ?>
        <tr>
            <td><?= $produto['nome'] ?></td>
            <td>R$ <?= $produto['preco'] ?></td>
            <td><?= $produto['quantidade'] ?></td>
            <td><?= $produto['validade'] ?></td>
            <td>
                <a href="editar?id=<?= $id ?>">Editar</a>
                <a href="excluir?id=<?= $id ?>">Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>