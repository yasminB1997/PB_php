<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
    <a href="/PB_php/MVCexemplo/usuario/telaCadastro">Cadastrar Novo Produto</a>
    
    <h2>Estoque de Produtos</h2>
    
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Valor</th>
                <th>Quantidade</th>
                <th>Validade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($produtos)): ?>
                <?php foreach ($produtos as $id => $p): ?>
                <tr><?= $u['nome']?></td>
                <td><?= $u['valor']?></td>
                <td><?= $u['quantidade']?></td>
                <td><?= $u['validade']?></td>
                        <a href="/PB_php/MVCexemplo/usuario/telaEditar?id=<?= $id ?>">Editar</a> | 
                        <a href="/PB_php/MVCexemplo/usuario/excluir?id=<?= $id ?>">Excluir</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td>Nenhum produto cadastrado.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>