<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $data = [
        "nome"=>"Mammolo",
        "fratelli"=>[
            "Brontolo",
            "Eolo",
            "Pisolo",
            "Dotto",
            "Gongolo",
            "Cucciolo"
        ]
    ];
    return view('home', $data);
});

Route::get('/movie', function () {

    $data = [
        "titolo"=>"Biancaneve e i 7 nani",
        
        "protagonisti"=>[
            "biancaneve",
            "La Regina Cattiva",
            "Il Principe",
            "Il Cacciatore",
            "Lo Specchio Magico"
        ] 
    ];
    return view('movie', $data);
});

Route::get('/description', function () {

    $data = [
        "genere"=>"Animazione",
        "anno"=>1937,
        "durata"=>83,
        "regia"=>"Fratelli Grimm"
    ];
    return view('description', $data);
});
