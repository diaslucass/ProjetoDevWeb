<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivrariaController;

Route::get('/', [LivrariaController::class, 'index']);
// Route::resource('livros', LivrariaController::class);
// Route::get('/livros', [LivrariaController::class, 'index'])->name('index');
// Route::get('/livros/create', [LivrariaController::class, 'create'])->name('create');
// Route::post('/livros', [LivrariaController::class, 'store'])->name('store');
// Route::get('/livros/{livro}', [LivrariaController::class, 'show'])->name('show');
// Route::get('/livros/{livro}/edit', [LivrariaController::class, 'edit'])->name('edit');
// Route::put('/livros/{livro}', [LivrariaController::class, 'update'])->name('update');
// Route::delete('/livros/{livro}', [LivrariaController::class, 'destroy'])->name('destroy');

Route::get('/livros', 'LivroController@index')->name('index');
Route::get('/livros', [LivrariaController::class, 'index'])->name('index');
Route::get('/livros/create', [LivrariaController::class, 'create'])->name('create');
Route::post('/livros', [LivrariaController::class, 'store'])->name('store');
Route::get('/livros/{livro}', [LivrariaController::class, 'show'])->name('show');
Route::get('/livros/{livro}/edit', [LivrariaController::class, 'edit'])->name('edit');
Route::put('/livros/{livro}', [LivrariaController::class, 'update'])->name('update');
Route::delete('/livros/{livro}', [LivrariaController::class, 'destroy'])->name('destroy');