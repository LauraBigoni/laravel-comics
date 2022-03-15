<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', ['title' => 'Homepage']);
})->name('home');

Route::get('/characters', function () {
    return view('characters', ['title' => 'Characters']);
})->name('characters');

Route::get('/comics', function () {
    $comics = config('comics');
    return view('comics', ['comics' => $comics , 'title' => 'Comics']);
})->name('comics');

Route::get('/movies', function () {
    return view('movies', ['title' => 'Movies']);
})->name('movies');

Route::get('/tv', function () {
    return view('tv', ['title' => 'Tv']);
})->name('tv');

Route::get('/games', function () {
    return view('games', ['title' => 'Games']);
})->name('games');

Route::get('/collectibles', function () {
    return view('collectibles', ['title' => 'Collectibles']);
})->name('collectibles');

Route::get('/videos', function () {
    return view('videos', ['title' => 'Videos']);
})->name('videos');

Route::get('/fans', function () {
    return view('fans', ['title' => 'Fans']);
})->name('fans');

Route::get('/news', function () {
    return view('news', ['title' => 'News']);
})->name('news');

Route::get('/shop', function () {
    return view('shop', ['title' => 'Shop']);
})->name('shop');