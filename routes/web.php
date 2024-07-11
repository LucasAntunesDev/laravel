<?php

use App\Http\Controllers\AnimalsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicial');
})->name('index');

Route::prefix('animals')->group(function () {
    Route::get('', [AnimalsController::class, 'index'])->name('animals');
    Route::get('register', [AnimalsController::class, 'register'])->name('animals.register');
    Route::post('register', [AnimalsController::class, 'store'])->name('animals.store');

    Route::get('delete/{animal}', [AnimalsController::class, 'delete'])->name('animals.delete');
    Route::delete('delete/{animal}', [AnimalsController::class, 'remove']);

    Route::get('edit/{animal}', [AnimalsController::class, 'edit'])->name('animals.edit');
    Route::put('edit/{animal}', [AnimalsController::class, 'editStore']);
});

Route::prefix('users')->group(function () {
    Route::get('', [UsersController::class, 'index'])->name('users');
    Route::get('register', [UsersController::class, 'register'])->name('users.register');
    Route::post('register', [UsersController::class, 'store'])->name('users.store');

    Route::get('delete/{user}', [UsersController::class, 'delete'])->name('users.delete');
    Route::delete('delete/{user}', [UsersController::class, 'remove']);

    Route::get('edit/{user}', [UsersController::class, 'edit'])->name('users.edit');
    Route::put('edit/{user}', [UsersController::class, 'editStore']);
});

Route::get('login', [UsersController::class, 'login'])->name('login');
Route::post('login', [UsersController::class, 'login']);

Route::get('logout', [UsersController::class, 'logout'])->name('logout');