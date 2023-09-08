<?php
use App\Http\Controllers\ArticulosController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ArticulosController::class,'index'])->name('articulos.index');
Route::get('/create', [ArticulosController::class,'create'])->name('articulos.create');
Route::post('/store', [ArticulosController::class, 'store'])->name('articulos.store');
Route::get('/edit/{id}', [ArticulosController::class,'edit'])->name('articulos.edit');
Route::put('/update/{id}', [ArticulosController::class,'update'])->name('articulos.update');
Route::delete('/destroy/{id}', [ArticulosController::class, 'destroy'])->name('articulos.destroy');

