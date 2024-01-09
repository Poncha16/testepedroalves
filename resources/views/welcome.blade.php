<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Formulário de produtos informáticos</title>
</head>
<body>
    <h1>Formulário de produtos informáticos</h1><br>
    <form action="/enviar" method="POST">
        @csrf <!-- {{ csrf_field() }} -->
        <label for="codigo">Código de produto:</label><br>
        <input type="text" id="codigo" name="codigo"><br>
        <label for="nome">Nome de Produto:</label><br>
        <input type="text" id="nome" name="nome"><br>
        <label for="cat">Categoria:</label><br>
        <input type="text" id="cat" name="cat"><br>
        <label for="preco">Preço do Produto:</label><br>
        <input type="text" id="preco" name="preco"><br>
        <label for="des">Descrição:</label><br>
        <input type="text" id="des" name="des"><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>