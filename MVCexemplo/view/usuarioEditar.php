<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Editar</title>
</head>
<body>
    <h2>Editar usuário</h2>

    <a href ="/PB_php/MVCexemplo/usuario/listar">Ir para tela Listar</a>
    <form method= "POST" action= "atualizar?id=<?= $_GET['id']?>">
        <input type="text" name="id" value="<?=htmlspecialchars($_GET['id'])?>"disabled>
        <input type="text" name="nome" value="<?=htmlspecialchars($usuario['nome'])?>"require>
            <input type="text" name="email" value="<?=htmlspecialchars($usuario['email'])?>"require>
            <button type ="submit">Enviar</button>
</form>
</body>
</html>
