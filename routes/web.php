<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ClienteController,
    FrotaController,
    HomeController,
    TipoFrotaController,
    UserController,
};

Auth::routes();

Route::get('/', function () {
    return redirect()->route('admin.home');
});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::name('admin.')->middleware(['auth'])->prefix('admin')->group(function(){
    Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //Usuarios
    Route::prefix('usuarios')->name('usuarios.')->group(function(){
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/novo', [UserController::class, 'create'])->name('create');
        Route::get('/visualizar/{id}', [UserController::class, 'show'])->name('show');
        Route::get('/alterar/{id}', [UserController::class, 'edit'])->name('edit');
        Route::post('/novo', [UserController::class, 'store'])->name('store');
        Route::put('/alterar/{id}', [UserController::class, 'update'])->name('update');
        Route::delete('/apagar/{id}', [UserController::class, 'destroy'])->name('delete');
    });

    //Clientes
    Route::prefix('clientes')->name('clientes.')->group(function(){
        Route::get('/', [ClienteController::class, 'index'])->name('index');
        Route::get('/novo', [ClienteController::class, 'create'])->name('create');
        Route::get('/visualizar/{id}', [ClienteController::class, 'show'])->name('show');
        Route::get('/alterar/{id}', [ClienteController::class, 'edit'])->name('edit');
        Route::post('/novo', [ClienteController::class, 'store'])->name('store');
        Route::put('/alterar/{id}', [ClienteController::class, 'update'])->name('update');
        Route::delete('/apagar/{id}', [ClienteController::class, 'destroy'])->name('delete');
    });

    //Tipo Frota
    Route::prefix('tipo-frota')->name('tipo-frota.')->group(function(){
        Route::get('/', [TipoFrotaController::class, 'index'])->name('index');
        Route::get('/novo', [TipoFrotaController::class, 'create'])->name('create');
        Route::get('/visualizar/{id}', [TipoFrotaController::class, 'show'])->name('show');
        Route::get('/alterar/{id}', [TipoFrotaController::class, 'edit'])->name('edit');
        Route::post('/novo', [TipoFrotaController::class, 'store'])->name('store');
        Route::put('/alterar/{id}', [TipoFrotaController::class, 'update'])->name('update');
        Route::delete('/apagar/{id}', [TipoFrotaController::class, 'destroy'])->name('delete');
    });  
    
    //Tipo Frota
    Route::prefix('frota')->name('frota.')->group(function(){
        Route::get('/', [FrotaController::class, 'index'])->name('index');
        Route::get('/novo', [FrotaController::class, 'create'])->name('create');
        Route::get('/visualizar/{id}', [FrotaController::class, 'show'])->name('show');
        Route::get('/alterar/{id}', [FrotaController::class, 'edit'])->name('edit');
        Route::post('/novo', [FrotaController::class, 'store'])->name('store');
        Route::put('/alterar/{id}', [FrotaController::class, 'update'])->name('update');
        Route::delete('/apagar/{id}', [FrotaController::class, 'destroy'])->name('delete');
    }); 
    
    Route::get('orcamento', [HomeController::class, 'orcamento'])->name('orcamento');
    Route::get('novo-orcamento', [HomeController::class, 'novo_orcamento'])->name('orcamento.create');

    Route::get('manifesto', [HomeController::class, 'manifesto'])->name('manifesto');
    Route::get('novo-manifesto', [HomeController::class, 'novo_manifesto'])->name('manifesto.create');    

});