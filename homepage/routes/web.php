<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeyController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return ["Hello World", "testing123"];
});

//enkelt view:
Route::get('/hey', function () {
    return view("hey");
});

// view med controller:
Route::get('/hey2',[HeyController::class,"index"]);
