<?php

use App\Http\Controllers\Admin\{SupportController};
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;


Route::delete('/supports/{id}', [SupportController::class, 'destroy'])->name('supports.destroy');

//Atualiza os regitros editados
Route::put('/supports/{id}/update', [SupportController::class, 'update'])->name('supports.update'); //a ação de submeter ela é do tipo put ou patch para atualizar todas informações

//Editar Registros
Route::get('/supports/{id}/edit', [SupportController::class, 'edit'])->name('supports.edit');
 
//Formulario de cadastro
Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');

//Exibe os detalhes da dúvida
Route::get('supports/{id}', [SupportController::class, 'show'])->name('supports.show');

//Recebe a request do formulario
Route::post('/supports', [SupportController::class, 'store'])->name('supports.store'); //pode ter o mesmo metodo desde que o verbo seja diferente

//Listagem do forúm
Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');

Route::get('/contato', [SiteController::class, 'contact']);
Route::get('/', function () {
    return view('welcome');
});
