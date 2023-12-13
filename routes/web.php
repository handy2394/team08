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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('parties',[partiesController::class,'index'])->name('parties.index');

Route::get('titles',[TitlesController::class,'index'])->name('titles.index');*/
Route::get('/', function () {
    return redirect('titles');
});

Route::get('titles', [TitlesController::class, 'index'])->name('titles.index');
// 顯示
Route::get('titles/{id}', [TitlesController::class, 'show'])->where('id', '[0-9]+')->name('titles.show');
// 修改
Route::get('titles/{id}/edit', [TitlesController::class, 'edit'])->where('id', '[0-9]+')->name('titles.edit');
// 刪除
Route::delete('titles/delete/{id}', [TitlesController::class, 'destroy'])->where('id', '[0-9]+')->name('titles.destroy');
// 新增
Route::get('titles/create',[TitlesController::class,'create'])->name('titles.create');
// 修改表單
Route::get('titles/{id}/edit', [TitlesController::class, 'edit'])->where('id', '[0-9]+')->name('titles.edit');
// 修改
Route::patch('titles/update/{id}', [TitlesController::class, 'update'])->where('id', '[0-9]+')->name('titles.update');
// 儲存
Route::post('titles/store', [TitlesController::class, 'store'])->where('id', '[0-9]+')->name('titles.store');


Route::get('parties', [PartiesController::class, 'index'])->name('parties.index');
// 顯示
Route::get('parties/{id}', [PartiesController::class, 'show'])->where('id', '[0-9]+')->name('parties.show');
// 修改
Route::get('parties/{id}/edit', [PartiesController::class, 'edit'])->where('id', '[0-9]+')->name('parties.edit');
// 刪除
Route::delete('parties/delete/{id}', [PartiesController::class, 'destroy'])->where('id', '[0-9]+')->name('parties.destroy');
// 新增
Route::get('parties/create',[PartiesController::class,'create'])->name('parties.create');
// 修改表單
Route::get('parties/{id}/edit', [PartiesController::class, 'edit'])->where('id', '[0-9]+')->name('parties.edit');
// 修改
Route::patch('parties/update/{id}', [PartiesController::class, 'update'])->where('id', '[0-9]+')->name('parties.update');
// 儲存
Route::post('parties/store', [PartiesController::class, 'store'])->where('id', '[0-9]+')->name('parties.store');