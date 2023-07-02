<?php

use App\Http\Controllers\Admin\{SupportController};
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

//Recebe a request do formulario
Route::post('/supports', [SupportController::class, 'store'])->name('supports.store');

//Formulario de cadastro
Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');

Route::get('/supports', [SupportController::class, 'index'])->name('index.supports');

Route::get('/contato', [SiteController::class, 'contact']);

Route::get('/', function () {
    return view('welcome');
});
