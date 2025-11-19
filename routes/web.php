<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home'); // your homepage
})->name('home');

Route::get('/nature', function () {
    return view('nature'); // create nature.blade.php
})->name('nature');

Route::get('/architecture', function () {
    return view('architecture'); // create architecture.blade.php
})->name('architecture');

Route::get('/animals', function () {
    return view('animals'); // create animals.blade.php
})->name('animals');

Route::get('/people', function () {
    return view('people'); // create people.blade.php
})->name('people');

Route::get('/tourist', function () {
    return view('tourist'); // create tourist.blade.php
})->name('tourist');


