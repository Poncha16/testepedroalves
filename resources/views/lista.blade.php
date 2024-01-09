<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Lista</title>
</head>
<body>
    <h1>Lista De Produtos</h1>

    <table>
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Preco</th>
                <th>Descricao</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $row)
            <tr>
                <th scope="row">{{ $row->codigo}}</th>
                <td>{{ $row->nome}}</td>
                <td>{{ $row->cat}}</td>
                <td>{{ $row->preco}}</td>
                <td>{{ $row->des}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>