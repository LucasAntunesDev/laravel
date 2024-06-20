<?php

use App\Http\Controllers\AnimalsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/animals', [AnimalsController::class, 'index'])->name('animals');
Route::get('/animals/register', [AnimalsController::class, 'register'])->name('animals.register');
Route::post('/animals/register', [AnimalsController::class, 'store'])->name('animals.store');

Route::get('/animals/delete/{animal}', [AnimalsController::class, 'delete'])->name('animals.delete');
Route::delete('/animals/delete/{animal}', [AnimalsController::class, 'delete']);