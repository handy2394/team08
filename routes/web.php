<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PartiesController;
use App\Http\Controllers\TitlesController;
use Illuminate\Support\Facades\Auth;
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

// 顯示顯示所有政黨資料
Route::get('parties',[PartiesController::class,'index'])->name('parties.index');
// 顯示單一政黨資料
Route::get('parties/{id}', [PartiesController::class, 'show'])->where('id', '[0-9]+')->name('parties.show');
// 修改單一政黨表單
Route::get('parties/{id}/edit', [PartiesController::class, 'edit'])->where('id', '[0-9]+')->name('parties.edit');
// 刪除單一政黨資料
Route::delete('parties/delete/{id}', [PartiesController::class, 'destroy'])->where('id', '[0-9]+')->name('parties.destroy');
// 新增政黨表單
Route::get('parties/create', [PartiesController::class, 'create'])->name('parties.create');
// 修改政黨表單
Route::get('parties/{id}/edit', [PartiesController::class, 'edit'])->where('id', '[0-9]+')->name('parties.edit');
// 修改政黨資料
Route::patch('parties/update/{id}', [PartiesController::class, 'update'])->where('id', '[0-9]+')->name('parties.update');
// 儲存新政黨資料
Route::post('parties/store', [PartiesController::class, 'store'])->where('id', '[0-9]+')->name('parties.store');
// 顯示顯示泛綠政黨資料
Route::get('parties/green', [PartiesController::class, 'green'])->name('parties.green');
// 顯示顯示泛藍政黨資料
Route::get('parties/blue', [PartiesController::class, 'blue'])->name('parties.blue');

// 顯示顯示所有民意代表資料
Route::get('titles',[TitlesController::class,'index'])->name('titles.index');
// 顯示單一民意代表資料
Route::get('titles/{id}', [TitlesController::class, 'show'])->where('id', '[0-9]+')->name('titles.show');
// 選定位置查詢民意代表
Route::get('titles/city', [TitlesController::class, 'city'])->name('titles.city');
// 修改單一民意代表表單
Route::get('titles/{id}/edit', [TitlesController::class, 'edit'])->where('id', '[0-9]+')->name('titles.edit');
// 刪除單一民意代表資料
Route::delete('titles/delete/{id}', [TitlesController::class, 'destroy'])->where('id', '[0-9]+')->name('titles.destroy');
// 新增民意代表表單
Route::get('titles/create', [TitlesController::class, 'create'])->name('titles.create');
// 修改民意代表表單
Route::get('titles/{id}/edit', [TitlesController::class, 'edit'])->where('id', '[0-9]+')->name('titles.edit');
// 修改民意代表資料
Route::patch('titles/update/{id}', [TitlesController::class, 'update'])->where('id', '[0-9]+')->name('titles.update');
// 儲存新民意代表資料
Route::post('titles/store', [TitlesController::class, 'store'])->where('id', '[0-9]+')->name('titles.store');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



