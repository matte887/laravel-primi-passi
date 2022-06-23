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
            <li><a href="/">Home</a></li>
            <li><a href="/menu">Il menù</a></li>
            <li><a href="/pizzeria">La pizzeria</a></li>
        </ul>
    </header>
    <div class="home-container background">
        <h2>Le nostre Pizze</h2>
    
        {{-- <ul>
            @foreach ($pizze as $pizza)
                <li>
                    <h4>{{$pizza['nome']}}</h4>
                    <p>{{$pizza['ingredienti']}}</p>
                </li>
            @endforeach
        </ul>
        <h2>I nostri Dolci</h2>
        <ul>
            @foreach ($dolci as $dolce)
                <li><h4>{{$dolce}}</h4></li>
            @endforeach
        </ul> --}}
        
        <ul>
            @forelse ($pizze as $pizza)
                <li>
                    <h4>{{$pizza['nome']}}</h4>
                    <p>{{$pizza['ingredienti']}}</p>
                </li>
            @empty
                <p>Non abbiamo pizze stasera :(</p>
            @endforelse
        </ul>
        <h2>I nostri Dolci</h2>
        <ul>
            @forelse ($dolci as $dolce)
                <li><h4>{{$dolce}}</h4></li>
            @empty
                <p>Niente dolce stasera :(</p>
            @endforelse
        </ul>
    </div>
</body>

</html>
