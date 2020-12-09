<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StandsController;

Route::get('/', function () {
    return view('arriendo');
});

Route::get('funcionesmatt', function () {
    return view('funcionesmatt');
});

Route::get('cursophp', function () {
    return view('cursophp');
});


Route::get('autos', function () {
    return view('autos');
});

Route::get('objetoscancha', function () {
    return view('objetoscancha');
});

Route::get('funciones', function () {
    return view('funciones');
});

Route::get('objetos', function () {
    return view('objetos');
});

Route::get('curso', function () {
    return view('curso');
});

Route::get('hhh', function () {
    return view('hhh');
});

Route::get('draw2', function () {
    return view('draw2');
});

Route::get('draw3', function () {
    return view('draw3');
});

Route::get('draw4', function () {
    return view('draw4');
});

Route::get('draw5', function () {
    return view('draw5');
});

Route::get('draw6', function () {
    return view('draw6');
});

Route::get('arriendo', function () {
    return view('arriendo');
});

Route::get('php', function () {
    return view('eventos');
});

Route::get('modelo', function () {
    return view('modelo_agendas');
});

Route::get('agenda', function () {
    return view('agenda');
});

Route::get('registro_usuario', function () {
    return view('registro_usuario');
});

Route::resource('test', StandsController::class);
