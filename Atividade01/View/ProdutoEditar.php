<h2>Editar Produto</h2>

<form method="post" action="atualizar">
    <input type="hidden" name="id" value="<?= $id ?>">

    Nome: <input type="text" name="nome" value="<?= $produto['nome'] ?>" required><br><br>
    Preço: <input type="number" step="0.01" name="preco" value="<?= $produto['preco'] ?>" required><br><br>
    Quantidade: <input type="number" name="quantidade" value="<?= $produto['quantidade'] ?>" required><br><br>
    Validade: <input type="date" name="validade" value="<?= $produto['validade'] ?>" required><br><br>

    <button type="submit">Atualizar</button>
</form>

<a href="listar">Voltar</a>