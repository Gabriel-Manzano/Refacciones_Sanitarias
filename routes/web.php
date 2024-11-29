<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;

Route::get('/login',[controladorVistas::class,'login'])->name('rutalogin');
Route::get('/registro',[controladorVistas::class,'registro'])->name('rutaregistro');
Route::get('/',[controladorVistas::class,'inicio'])->name('rutainicio');
Route::get('/perfil',[controladorVistas::class,'perfil'])->name('rutaperfil');
Route::get('/carrito',[controladorVistas::class,'carrito'])->name('rutacarrito');
Route::get('/gestionUser',[controladorVistas::class,'gestionUser'])->name('rutagestionuser');
Route::get('/gestionProduct',[controladorVistas::class,'gestionProduct'])->name('rutagestionproduct');