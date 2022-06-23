<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Napul'è</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <header>
        <ul>
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('menu')}}">Il menù</a></li>
            <li><a href="{{route('restaurant')}}">La pizzeria</a></li>
        </ul>
    </header>
    
    <div class="home-container background">
        <h1>Benvenuto nella pizzeria {{$nomePizzeria}} del maestro pizzaiolo {{$nomePizzaiolo}}</h1>
    
        @if ($siamoAperti)
        <h3>Oggi siamo aperti :)</h3>
            
        @else
        <h3>Oggi siamo chiusi :(</h3>
            
        @endif
    </div>
</body>
</html>