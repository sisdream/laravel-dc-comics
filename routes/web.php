<?php

use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

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

Route::get("", function () {
    return view('home');
})->name('home');
  
Route::resource("comics", ComicController::class);

Route::get('/', [ComicController::class,'index'])->name('home');
Route::get('comic-create', [ComicController::class, 'create'])->name('comics-create');
Route::get('comic-detail/{id}', [ComicController::class,'show'])->name('comics-detail');
Route::get('comic-detail', [ComicController::class,'store'])->name('comic-detail');
Route::patch("/comics/{id}", [ComicController::class, 'update'])->name('comics-update');
Route::get('comic-edit/edit', [ComicController::class,'edit'])->name('comics-edit');
Route::delete("comic-destroy", [ComicController::class, 'destroy'])->name('comics-destroy');



Route::get('characters', [PageController::class,'characters'])->name('characters');

Route::get('movies', [PageController::class,'movies'])->name('movies');

Route::get('tv', [PageController::class,'tv'])->name('tv');

Route::get('games', [PageController::class,'games'])->name('games');

Route::get('collectibles', [PageController::class,'collectibles'])->name('collectibles');

Route::get('videos', [PageController::class,'videos'])->name('videos');

Route::get('fans', [PageController::class,'fans'])->name('fans');

Route::get('news', [PageController::class,'news'])->name('news');

Route::get('shop', [PageController::class,'shop'])->name('shop');



