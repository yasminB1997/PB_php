<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
</head>
<body>
    <h2>Editar Produto</h2>

    <a href="/PB_php/MVCexemplo/usuario/listar">Cancelar e Voltar</a>

    <form method="POST" action="atualizar?id=<?= $_GET['id'] ?>">
        <label>ID:</label>
        <input type="text" value="<?= htmlspecialchars($_GET['id']) ?>" disabled><br><br>
        
        <input type="text" name="nome" value="<?= htmlspecialchars($produtoData['nome']) ?>" required placeholder="Nome">
        <input type="number" step="0.01" name="valor" value="<?= htmlspecialchars($produtoData['valor']) ?>" required placeholder="Valor">
        <input type="number" name="quantidade" value="<?= htmlspecialchars($produtoData['quantidade']) ?>" required placeholder="Quantidade">
        <input type="date" name="validade" value="<?= htmlspecialchars($produtoData['validade']) ?>" required>
        
        <button type="submit">Atualizar Produto</button>
    </form>
</body>
</html>