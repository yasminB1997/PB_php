<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
</head>
<body>
    <a href="/PB_php/MVCexemplo/usuario/listar">Voltar para Listagem</a>
    
    <h2>Cadastrar Novo Produto</h2>
    
    <form method="POST" action="salvar">
        <input type="text" name="nome" placeholder="Nome do Produto" required>
        <input type="number"  name="valor" placeholder="Valor" required>
        <input type="number" name="quantidade" placeholder="Quantidade" required>
        <input type="date" name="validade" required>
        <button type="submit">Salvar Produto</button>
</form>
</body>
</html>