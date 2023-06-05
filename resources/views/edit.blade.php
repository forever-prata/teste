<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <h1>Editando {{ $client->nome }}</h1>
    <form action="/teste/update/{{$client->id}}" method="POST">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" value="{{ $client->nome }}">

        <label for="idade">Idade</label>
        <input type="number" id="idade" name="idade" value="{{ $client->idade }}"> 

        <input type="date" name="date" id="date" value="{{ $client->date->format('Y-m-d') }}">

        <input type="checkbox" name="habilidades[]" value="PHP" @if((in_array("PHP", $client->habilidades))) checked @endif> PHP
        <input type="checkbox" name="habilidades[]" value="Java" @if((in_array("Java", $client->habilidades))) checked @endif> Java
        <input type="checkbox" name="habilidades[]" value="Laravel" @if((in_array("Laravel", $client->habilidades))) checked @endif> Laravel
        <input type="checkbox" name="habilidades[]" value="SQL" @if((in_array("SQL", $client->habilidades))) checked @endif> SQL
        
        <input type="submit" value="Salvar">
    </form>
</body>
</html>