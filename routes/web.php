<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartiesController;
use App\Http\Controllers\TitlesController;
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
    return view('welcome');
});

Route::get('/get');

Route::get('titles',[TitlesController::class,'index'])->name('titles.index');

Route::get('titles/{id}', [TitlesController::class, 'show'])->where('id', '[0-9]+')->name('titles.show');

Route::get('titles/{id}/edit', [TitlesController::class, 'edit'])->where('id', '[0-9]+')->name('titles.edit');

Route::delete('titles/delete/{id}', [TitlesController::class, 'destroy'])->where('id', '[0-9]+')->name('titles.destroy');

Route::get('titles/create', [TitlesController::class, 'create'])->name('titles.create');

Route::get('titles/{id}/edit', [TitlesController::class, 'edit'])->where('id', '[0-9]+')->name('titles.edit');

Route::patch('titles/update/{id}', [TitlesController::class, 'update'])->where('id', '[0-9]+')->name('titles.update');

Route::post('titles/store', [TitlesController::class, 'store'])->where('id', '[0-9]+')->name('titles.store');

Route::get('titles/city', [TitlesController::class, 'city'])->name('titles.city');


Route::get('titles/men',[TitlesController::class,'men'])->name('titles.men');
Route::get('titles/girl',[TitlesController::class,'girl'])->name('titles.girl');
Route::get('titles/no',[TitlesController::class,'no'])->name('titles.no');




Route::get('parties',[partiesController::class,'index'])->name('parties.index');

Route::get('parties/{id}', [PartiesController::class, 'show'])->where('id', '[0-9]+')->name('parties.show');

Route::get('parties/{id}/edit', [PartiesController::class, 'edit'])->where('id', '[0-9]+')->name('parties.edit');

Route::delete('parties/delete/{id}', [PartiesController::class, 'destroy'])->where('id', '[0-9]+')->name('parties.destroy');

Route::get('parties/create', [PartiesController::class, 'create'])->name('parties.create');

Route::get('parties/{id}/edit', [PartiesController::class, 'edit'])->where('id', '[0-9]+')->name('parties.edit');

Route::patch('parties/update/{id}', [PartiesController::class, 'update'])->where('id', '[0-9]+')->name('parties.update');

Route::post('parties/store', [PartiesController::class, 'store'])->name('parties.store');

Route::get('parties/green',[PartiesController::class, 'green'])->name('parties.green');
Route::get('parties/blue',[PartiesController::class, 'blue'])->name('parties.blue');
Route::get('parties/no',[PartiesController::class, 'no'])->name('parties.no');
Route::get('parties/other',[PartiesController::class, 'other'])->name('parties.other');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
