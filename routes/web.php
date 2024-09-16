<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OutController;

Route::get('/', function () {
    return view('welcome');
});

 

Route::get('/form', [FormController::class, 'index']);
Route::post('/form', [FormController::class, 'getData'])->name('form');

Route::get('/admin', [AdminController::class, 'index']);
Route::post('/admin/{id}', [AdminController::class, 'writeData'])->name('admin');
 
Route::get('/out', [OutController::class, 'index']);