<?php

use Illuminate\Support\Facades\Route;

require __DIR__ . '/dashboard.php';

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('client.blades.home');
});
Route::get('produtos', function(){
    return view('client.blades.products');
});
