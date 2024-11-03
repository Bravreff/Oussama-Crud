<?php

use App\Http\Controllers\personneController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

});
Route::get('/show',[personneController::class,'index'])->name('show');
Route::get('/create',[personneController::class,'create'])->name('create');
Route::post('/store',[personneController::class,'store'])->name('personne.store');
Route::get('/edit{id}',[personneController::class,'edit'])->name('personne.edit');
Route::get('/delete{id}',[personneController::class,'destroy'])->name('personne.delete');
Route::post('/update{id}',[personneController::class,'update'])->name('personne.update');
