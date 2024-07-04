<?php

use App\Http\Controllers\AnimalsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicial');
})->name('index');

#animals
Route::get('/animals', [AnimalsController::class, 'index'])->name('animals');
Route::get('/animals/register', [AnimalsController::class, 'register'])->name('animals.register');
Route::post('/animals/register', [AnimalsController::class, 'store'])->name('animals.store');

Route::get('/animals/delete/{animal}', [AnimalsController::class, 'delete'])->name('animals.delete');
Route::delete('/animals/delete/{animal}', [AnimalsController::class, 'remove']);

Route::get('animals/edit/{animal}', [AnimalsController::class, 'edit'])->name('animals.edit');
Route::put('animals/edit/{animal}', [AnimalsController::class, 'editStore']);

#users
Route::get('/users', [UsersController::class, 'index'])->name('users');
Route::get('/users/register', [UsersController::class, 'register'])->name('users.register');
Route::post('/users/register', [UsersController::class, 'store'])->name('users.store');

Route::get('/users/delete/{user}', [UsersController::class, 'delete'])->name('users.delete');
Route::delete('/users/delete/{user}', [UsersController::class, 'remove']);

Route::get('users/edit/{user}', [UsersController::class, 'edit'])->name('users.edit');
Route::put('users/edit/{user}', [UsersController::class, 'editStore']);