<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Cadastrar</title>
</head>
<body>
    <a href ="/PB_php/DevSolutions/livro/listar">Ir para a tela Listar</a>
    <form method= "POST" action="salvar">
        <input type= "text" name ="titulo" placeholder= "Titlo do livro" require>
            <input type="text" name= "autor" placeholder ="Nome do autor" require>
            <input type= "date" name ="ano_publicação" placeholder= "Ano de Publicação escrito" require>
            <input type="text" name= "editora" placeholder ="Nome da editora" require>
            <button type ="submit">Enviar</button>
            
</form>
</body>
</html>