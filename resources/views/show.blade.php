<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
</head>
<body>
    <img src="/img/clients/{{ $client->image }}" alt="">
    <h1>{{ $client->nome }}</h1>
    <h2>{{ $client->idade }} Anos</h2>
    <h2> Data de Nascimento = {{ date('d/m/y', strtotime($client->data)) }}</h2>
    <br>

    <h2>Habilidades</h2>
    <ul>
        @foreach($client->habilidades as $habilidade)
            <li>
                {{ $habilidade }}
            </li>
        @endforeach
    </ul>

    <br>
    <a href="/teste">Voltar</a>
</body>
</html>