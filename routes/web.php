<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Mime\CharacterStream;

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

// HOME
Route::get('/', function () {
    $comics = config('comics');

    return view('home', compact('comics'));
})->name('home');




// Character
Route::get('/characters', function () {
    return view('characters');
})->name('characters');

// COMICS
Route::get('/comics', function () {
    return view('comics');
})->name('comics');

// MOVIE
Route::get('/movie', function () {
    return view('movie');
})->name('movie');

// TV
Route::get('/tv', function () {
    return view('tv');
})->name('tv');

// GAMES
Route::get('/games', function () {
    return view('games');
})->name('games');

// COLLECTIBLES
Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

// VIDEOS
Route::get('/videos', function () {
    return view('videos');
})->name('videos');

// FANS
Route::get('/fans', function () {
    return view('fans');
})->name('fans');

// NEWS
Route::get('/news', function () {
    return view('news');
})->name('news');

// SHOP
Route::get('/shop', function () {
    return view('shop');
})->name('shop');




// CARDS
Route::get('/book/{id}', function ($id) {
    $books = config('comics');

    if (!is_numeric($id) || $id < 0 || $id >= count($books)) {
        abort(404);
    }

    $book = $books[$id];

    return view('book', compact('book'));
})->name('book');
