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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('parties',[partiesController::class,'index'])->name('parties.index');

// Route::get('titles',[TitlesController::class,'index'])->name('titles.index');

// 註解一下
Route::get('/', function () {
    return redirect('titles');
});
Route::get('titles', [PlayersController::class, 'index'])->name('titles.index');
Route::get('titles/{id}', [PlayersController::class, 'show'])->where('id', '[0-9]+')->name('titles.show');
Route::get('titles/{id}/edit', [PlayersController::class, 'edit'])->where('id', '[0-9]+')->name('titles.edit');

Route::get('parties', [TeamsController::class, 'index'])->name('parties.index');
Route::get('parties/{id}', [TeamsController::class, 'show'])->where('id', '[0-9]+')->name('parties.show');
Route::get('parties/{id}/edit', [TeamsController::class, 'edit'])->where('id', '[0-9]+')->name('parties.edit');