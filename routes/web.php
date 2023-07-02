<?php

use App\Http\Controllers\Admin\{SupportController};
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;


//Formulario de cadastro
Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');

//Exibe os detalhes da dúvida
Route::get('supports/{id}', [SupportController::class, 'show'])->name('supports.show');

//Recebe a request do formulario
Route::post('/supports', [SupportController::class, 'store'])->name('supports.store');

Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');

Route::get('/contato', [SiteController::class, 'contact']);
Route::get('/', function () {
    return view('welcome');
});
