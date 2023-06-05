<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <main>
        <div>
            @if(session('msg'))
                <p class="msg">{{ session('msg') }}</p>
            @endif
            @yield('content')
        </div>
    </main>

    <form action="/teste/save" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="image">Foto</label>
        <input type="file" name="image" id="image">

        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome">

        <label for="idade">Idade</label>
        <input type="number" id="idade" name="idade"> 

        <input type="date" name="date" id="date">

        <input type="checkbox" name="habilidades[]" value="PHP"> PHP
        <input type="checkbox" name="habilidades[]" value="Java"> Java
        <input type="checkbox" name="habilidades[]" value="Laravel"> Laravel
        <input type="checkbox" name="habilidades[]" value="SQL"> SQL


        
        <input type="submit" value="Salvar">
    </form>

    <br>
    <form action="/teste" method="GET">
        <label for="search">Procurar</label>
        <input type="text" name="search" id="search">
        <a href="/teste">Reset</a>
    </form>
    <br>
    <table>
        @if($search)
           Resultados da Pesquisa
        @else
            <th>Nome</th><th>Idade</th>
        @endif
        @foreach($clients as $client)
            <tr>
                <td>{{ $client->nome }}</td>
                <td>{{ $client->idade }}</td>
                <td><a href="/teste/{{ $client->id }}">Detalhes</a></td>
                <td>
                    <form action="/teste/{{ $client->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Deletar</button>
                    </form>
                </td>
                <td><a href="/teste/edit/{{ $client->id }}">Editar</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>