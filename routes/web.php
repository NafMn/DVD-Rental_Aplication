<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrondendController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frondend.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// route frondend

Route::get('/details', [FrondendController::class, 'detail_penyewaan']);

Route::get('/bayar', [FrondendController::class, 'detail_penyewaan'])->name('user');
Route::get('/search', [FrondendController::class, 'rekomendasi_film']);
Route::get('/kebijakan-privasi', [FrondendController::class, 'kebijakandanprivasi']);