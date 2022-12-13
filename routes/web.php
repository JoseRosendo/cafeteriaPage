<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Horarios;
use App\Http\Livewire\PaginaWeb;
use App\Http\Livewire\Productos;
use App\Http\Livewire\Configuraciones;
use App\Http\Livewire\Galerias;

Route::resource('/paginaweb', 'App\Http\Controllers\PaginaController')->names('/paginaweb');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //Ruta de los productos
    Route::get('/horarios', Horarios::class)->name('horarios');
    //Ruta de los productos
    Route::get('/configuraciones', Configuraciones::class)->name('configuraciones');
    Route::get('/productos', Productos::class)->name('productos');
    Route::get('/galerias', Galerias::class)->name('galerias');
    
});
