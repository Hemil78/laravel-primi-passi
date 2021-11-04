{{-- Per prima cosa, creiamo un nuovo progetto Laravel 7, utilizzando questo comando:
composer create-project --prefer-dist laravel/laravel:^7.0 .
avviamo l'artisan serve con uno di questi due comandi:
php artisan serve oppure php -S localhost:8000 -t public
A questo punto, iniziamo a prendere confidenza con le rotte e le views: cancelliamo la view welcome.blade.php e creiamo una nostra homepage. Facciamo quindi sì che la rotta / visualizzi home.blade.php
Inizialmente stampiamo un Hello World, poi passiamo dei dati alla view in modo da visualizzarli dinamicamente con Blade. --}}


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
        <h1>Home Page</h1>
        <H2>Mi chiamo {{$nome}}</H2>
        <h3>I miei fratelli sono:</h3>
        <ul>
            @foreach ($fratelli as $fratello)
            <li>{{$fratello}}</li>
                
            @endforeach
        </ul>
    </body>
</html>