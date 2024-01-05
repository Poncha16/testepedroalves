<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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