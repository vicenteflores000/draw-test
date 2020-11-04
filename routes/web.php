<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('curso', function () {
    return view('curso');
});

Route::get('hhh', function () {
    return view('hhh');
});

Route::get('draw2', function (){
    return view('draw2');
});

Route::get('draw3', function (){
    return view('draw3');
});

Route::get('draw4', function (){
    return view('draw4');
});

Route::get('draw5', function (){
    return view('draw5');
});

Route::get('draw6', function (){
    return view('draw6');
});

Route::get('arriendo', function (){
    return view('arriendo');
});