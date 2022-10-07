<?php

use App\Http\Controllers\Admin\ItemController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\LocaleController;
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

Route::get('/', function () {
    return view('welcome');
})->name('main');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::get('/locale/{locale}', [LocaleController::class, 'changeLocale'])->name('locale');

Route::middleware(['auth', 'admin', 'set_locale'])->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.index');

    Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('admin.users.show');
    Route::get('/users/{user}/delete', [UserController::class, 'destroy'])->name('admin.users.destroy');

    Route::get('/orders', [OrderController::class, 'index'])->name('admin.orders.index');
    Route::get('/orders/{order}', [OrderController::class, 'show'])->name('admin.orders.show');

    Route::get('/items', [ItemController::class, 'index'])->name('admin.items.index');
    Route::get('/items/{item}', [ItemController::class, 'show'])->name('admin.items.show');
    Route::get('/items/{item}/delete', [ItemController::class, 'destroy'])->name('admin.items.destroy');
});

require __DIR__.'/auth.php';
