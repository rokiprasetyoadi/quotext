<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['admin'])->group(function() {
    Route::get('/quote/create', [QuoteController::class, 'create_quote'])->name('create_quote');
    Route::post('/quote/create', [QuoteController::class, 'store_quote'])->name('store_quote');
    Route::get('/quote', [QuoteController::class, 'index_quote'])->name('index_quote');
    Route::get('/quote/{quote}', [QuoteController::class, 'show_quote'])->name('show_quote');
    Route::get('/quote/{quote}/edit', [QuoteController::class, 'edit_quote'])->name('edit_quote');
    Route::patch('/quote/{quote}/update', [QuoteController::class, 'update_quote'])->name('update_quote');
    Route::delete('/quote/{quote}', [QuoteController::class, 'delete_quote'])->name('delete_quote');
});

Route::post('/quote/filter', [QuoteController::class, 'filter'])->name('filter');
