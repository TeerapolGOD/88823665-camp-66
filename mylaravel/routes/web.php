<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MultiplicationController;

Route::get('/login',
    [LoginController::class, 'index']);

Route::get('/hello', function () {
    return "<h1>Hello World!<h1>";
});

Route::get("/mycontroller/{id?}", 
    [MyController::class,'myfunction']);

Route::post("/mycontroller/{id?}", 
    [MyController::class,'myfunction']);


Route::get('/multiplication', 
    [MultiplicationController::class, 'index']);
    
Route::post('/multiplication', 
    [MultiplicationController::class, 'index']);

Route::get('/', function () {
    return view('layouts.default');
});

Route::get('/hello/(id?)',
    function ($val="") {
        return "<h1>Hello World $val</h1>";
    });