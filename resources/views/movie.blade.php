<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laravel Primi Passi</title>
        {{-- style --}}
        <style>
    
        </style>
    </head>

    <body>
        <ul>
            <li><a href="http://127.0.0.1:8000/">Home</a></li>
            <li><a href="http://127.0.0.1:8000/movie">Movie</a></li>
            <li><a href="http://127.0.0.1:8000/description">Description</a></li>
        </ul>
        
        <h1>Movie</h1>
        <H2>Siamo i protagonisti del film: {{$titolo}}</H2>
        <h3>Oltre a noi ci sono altri protagonisti:</h3>
        <ul>
            @foreach ($protagonisti as $protagonista)
            <li>{{$protagonista}}</li>
                
            @endforeach
        </ul>
    </body>
</html>