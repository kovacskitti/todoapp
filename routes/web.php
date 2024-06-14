<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/addtodo',[App\Http\Controllers\TodoController::class, 'addtodo'])->name("addtodo");

Route::get('/todos/index',[App\Http\Controllers\TodoController::class, 'todosByIndex'])->name("todosByIndex");
