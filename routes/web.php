<?php

namespace App\Http\Controllers;

//use App\Http\BookControllers\BookController;
//use App\Http\Controllers\BookController;
use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/book', [BookController::class, 'book']);

Route::get('/add', function () {
    return view('add');
});

Route::post('/addbook', [BookController::class, 'addBook']);

