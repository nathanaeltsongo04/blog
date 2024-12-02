<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
})->name('welcome');
Route::get('/post_detail', function () {
    return view('pages.show');
});
