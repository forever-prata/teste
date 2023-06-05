<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Cliente</h1>

    <p>O Nome do Cliente é {{ $nome }} e ele tem {{ $idade }} anos</p>

    @for($i = 0; $i < count($arr); $i++)
        <p>{{ $arr[$i] }}</p>
    @endfor

    @foreach($nomes as $nome)
        <p>{{ $loop->index }} - {{ $nome }}</p>
    @endforeach

    @php
        $name = "Pedro";
        echo $name;
    @endphp
    
    <a href="/">Home</a>
</body>
</html>