<h2>Cadastrar Produto</h2>

<form method="post" action="salvar">
    Nome: <input type="text" name="nome" required><br><br>
    Preço: <input type="number" step="0.01" name="preco" required><br><br>
    Quantidade: <input type="number" name="quantidade" required><br><br>
    Validade: <input type="date" name="validade" required><br><br>

    <button type="submit">Salvar</button>
</form>

<a href="listar">Voltar</a>