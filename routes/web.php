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

Route::get('/', [App\Http\Controllers\IndexController::class, 'index']);

Route::post('/search', [App\Http\Controllers\IndexController::class, 'search'])->name('search');


Route::get('/all-albums', [App\Http\Controllers\IndexController::class, 'allAlbums']);


Route::get('/{id}/{comb}', [App\Http\Controllers\IndexController::class, 'getSong']);

Route::get('/album-tracks/{songId}/{comb}', [App\Http\Controllers\IndexController::class, 'getAlbumSong']);



Route::get('/all-artists', [App\Http\Controllers\IndexController::class, 'allArtists']);

Route::get('/afro-artists', [App\Http\Controllers\IndexController::class, 'afroArtists']);
Route::get('/dancehall-artists', [App\Http\Controllers\IndexController::class, 'dancehallArtists']);
Route::get('/gospel-artists', [App\Http\Controllers\IndexController::class, 'gospelArtists']);
Route::get('/hiphop-artists', [App\Http\Controllers\IndexController::class, 'hiphopArtists']);
Route::get('/reggae-artists', [App\Http\Controllers\IndexController::class, 'reggaeArtists']);


Route::get('/afro-songs', [App\Http\Controllers\IndexController::class, 'afroSongs']);
Route::get('/dancehall-songs', [App\Http\Controllers\IndexController::class, 'dancehallSongs']);
Route::get('/gospel-songs', [App\Http\Controllers\IndexController::class, 'gospelSongs']);
Route::get('/hiphop-songs', [App\Http\Controllers\IndexController::class, 'hiphopSongs']);
Route::get('/reggae-songs', [App\Http\Controllers\IndexController::class, 'reggaeSongs']);


Route::get('/hiphop-albums', [App\Http\Controllers\IndexController::class, 'hiphopAlbums']);
Route::get('/afro-albums', [App\Http\Controllers\IndexController::class, 'afroAlbums']);
Route::get('/dancehall-albums', [App\Http\Controllers\IndexController::class, 'dancehallAlbums']);
Route::get('/gospel-albums', [App\Http\Controllers\IndexController::class, 'gospelAlbums']);
Route::get('/reggae-albums', [App\Http\Controllers\IndexController::class, 'reggaeAlbums']);

Route::get('/cat-number', [App\Http\Controllers\IndexController::class, 'numberCat']);
Route::get('/cat-a', [App\Http\Controllers\IndexController::class, 'aCat']);
Route::get('/cat-b', [App\Http\Controllers\IndexController::class, 'bCat']);
Route::get('/cat-c', [App\Http\Controllers\IndexController::class, 'cCat']);
Route::get('/cat-d', [App\Http\Controllers\IndexController::class, 'dCat']);
Route::get('/cat-e', [App\Http\Controllers\IndexController::class, 'eCat']);
Route::get('/cat-f', [App\Http\Controllers\IndexController::class, 'fCat']);
Route::get('/cat-g', [App\Http\Controllers\IndexController::class, 'gCat']);
Route::get('/cat-h', [App\Http\Controllers\IndexController::class, 'hCat']);
Route::get('/cat-i', [App\Http\Controllers\IndexController::class, 'iCat']);
Route::get('/cat-j', [App\Http\Controllers\IndexController::class, 'jCat']);
Route::get('/cat-k', [App\Http\Controllers\IndexController::class, 'kCat']);
Route::get('/cat-l', [App\Http\Controllers\IndexController::class, 'lCat']);
Route::get('/cat-m', [App\Http\Controllers\IndexController::class, 'mCat']);
Route::get('/cat-n', [App\Http\Controllers\IndexController::class, 'nCat']);
Route::get('/cat-o', [App\Http\Controllers\IndexController::class, 'oCat']);
Route::get('/cat-p', [App\Http\Controllers\IndexController::class, 'pCat']);
Route::get('/cat-q', [App\Http\Controllers\IndexController::class, 'qCat']);
Route::get('/cat-r', [App\Http\Controllers\IndexController::class, 'rCat']);
Route::get('/cat-s', [App\Http\Controllers\IndexController::class, 'sCat']);
Route::get('/cat-t', [App\Http\Controllers\IndexController::class, 'tCat']);
Route::get('/cat-u', [App\Http\Controllers\IndexController::class, 'uCat']);
Route::get('/cat-v', [App\Http\Controllers\IndexController::class, 'vCat']);
Route::get('/cat-w', [App\Http\Controllers\IndexController::class, 'wCat']);
Route::get('/cat-x', [App\Http\Controllers\IndexController::class, 'xCat']);
Route::get('/cat-y', [App\Http\Controllers\IndexController::class, 'yCat']);
Route::get('/cat-z', [App\Http\Controllers\IndexController::class, 'zCat']);



Route::get('/artist/{artistId}/{comb}', [App\Http\Controllers\IndexController::class, 'getArtist']);

Route::get('/album/{name}/{comb}', [App\Http\Controllers\IndexController::class, 'getAlbum']);


Route::get('/download/{id}/{comb}', [App\Http\Controllers\IndexController::class, 'downloadSong']);

Route::get('/download-at/{id}/{comb}', [App\Http\Controllers\IndexController::class, 'downloadAlbumSong']);

Route::get('/download-zip/{id}/{comb}', [App\Http\Controllers\IndexController::class, 'downloadZip']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

Route::post('/songsupload', [App\Http\Controllers\SongsController::class, 'upload'])->name('songsupload');

Route::post('/albumupload', [App\Http\Controllers\SongsController::class, 'uploadAlbum'])->name('albumupload');

Route::post('/updatepicture', [App\Http\Controllers\UserUpdate::class, 'updatepicture'])->name('updatepicture');
