<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
</head>
<body>
    <table>
        <th>Nome</th><th>Idade</th>
        @foreach($pessoas as $pessoa)
            <tr>
                <td>{{ $pessoa['nome']}}</td>
                <td>{{ $pessoa['idade']}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>