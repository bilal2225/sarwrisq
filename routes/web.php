<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MureedainController;

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

    Route::get('/mureedain', [MureedainController::class, 'index'])->name('mureedain.index');
    Route::get('/mureedain/create', [MureedainController::class, 'create'])->name('mureedain.create');
    Route::post('/mureedain', [MureedainController::class, 'store'])->name('mureedain.store');
    Route::get('/mureedain/{id}/edit', [MureedainController::class, 'edit'])->name('mureedain.edit');
    Route::put('/mureedain/{id}', [MureedainController::class, 'update'])->name('mureedain.update');
    Route::get('/mureedain/{id}', [MureedainController::class, 'show'])->name('mureedain.show');
    Route::delete('/mureedain/{id}', [MureedainController::class, 'destroy'])->name('mureedain.destroy');
});

require __DIR__.'/auth.php';
