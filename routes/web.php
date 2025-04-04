<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RecipientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcelController;

Route::get('/', function () {
    return view('greetFromHexlet');
})->name('home');

Route::resource('recipients', RecipientController::class);



Route::get('/excel/upload', [ExcelController::class, 'showForm'])->name('excel.showForm');;
Route::post('/excel/upload', [ExcelController::class, 'upload'])->name('excel.upload');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
