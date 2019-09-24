<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/MatthewHill', function () {
    return view('matthewhill');
});

Route::get('/about', function () {
    return '<h1>This is the About page</h1>';
});

Route::get('/hello','HelloController@hello');
