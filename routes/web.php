<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaranaPrasaranaController;
use App\Http\Controllers\SaranaController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\PrasaranaController;
use App\Http\Controllers\admin\BukuController;
use App\Http\Controllers\admin\UserController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Route::group(['middleware' => 'auth'], function () {
//     Route::get('profile', 'ProfileController@edit')->name('profile.edit');
// });
Route::group(['middleware' => 'auth'], function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard/admin', 'index')->name('dashboard');
        
    });

    Route::controller(UserController::class)->group(function () {
        Route::get('/user', 'index')->name('user');
        Route::get('/user/create', 'create')->name('user.create');
        Route::post('/users','store')->name('user.store');
        Route::get('/users/{user}','show')->name('users.show');
        Route::get('/user/{user}/edit', 'edit')->name('user.edit');
        Route::put('/users/{user}', 'update')->name('user.update');
        Route::delete('/user/{user}', 'destroy')->name('user.destroy');
        
    });
    
    Route::controller(PrasaranaController::class)->group(function () {
        Route::get('/prasarana', 'index')->name('prasarana');
        Route::get('/prasarana/create', 'create')->name('prasarana.create');
        Route::post('/prasarana','store')->name('prasarana.store');
        Route::get('/prasarana/{id}','show')->name('prasarana.show');
        Route::get('/prasarana/{id}/edit', 'edit')->name('prasarana.edit');
        Route::put('/prasarana/{id}', 'update')->name('prasarana.update');
        Route::delete('/prasarana/{id}', 'destroy')->name('prasarana.destroy');
    });

    Route::controller(BukuController::class)->group(function () {
        Route::get('/books', 'index')->name('books');
        Route::get('/books/create', 'create')->name('books.create');
        Route::post('/books','store')->name('books.store');
        Route::get('/books/{id}','show')->name('books.show');
        Route::get('/books/{id}/edit', 'edit')->name('books.edit');
        Route::put('/books/{book}', 'update')->name('books.update');
        Route::delete('/books/{book}', 'destroy')->name('books.destroy');
    });
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    Route::controller(SaranaController::class)->group(function () {
        Route::get('/sarana', 'index')->name('sarana.index');
       
    });
});

require __DIR__.'/auth.php';
