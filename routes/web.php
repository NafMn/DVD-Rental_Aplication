<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrondendController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DvdController;


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

// Route::get('/', function () {
//     return view('frondend.index');

// });

Route::get('/', [FrondendController::class, 'index']);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// route frondend

Route::get('/details', [FrondendController::class, 'show']);

Route::get('/bayar', [FrondendController::class, 'detail_penyewaan'])->name('user');
Route::get('/search', [FrondendController::class, 'rekomendasi_film']);
Route::get('/kebijakan-privasi', [FrondendController::class, 'kebijakandanprivasi']);



// admin

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::controller(DvdController::class)->prefix('dvd')->group(function () {
        Route::get('admin', 'index')->name('dvd');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('show/{id}', 'show')->name('show');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::put('edit/{id}', 'update')->name('update');
        Route::delete('destroy/{id}', 'destroy')->name('destroy');
    });

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});
Route::resource('dvd', DvdController::class);

