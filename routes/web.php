<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;
use App\Http\Controllers\UsuarioController;

//Gestion de usuarios
Route::get('/gestionUser', [UsuarioController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/crear', [UsuarioController::class, 'create'])->name('usuarios.create');
Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');
Route::get('/usuarios/{usuario}/editar', [UsuarioController::class, 'edit'])->name('usuarios.edit');
Route::put('/usuarios/{usuario}', [UsuarioController::class, 'update'])->name('usuarios.update');
Route::delete('/usuarios/{usuario}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');
//

Route::get('/login',[controladorVistas::class,'login'])->name('rutalogin');
Route::get('/registro',[controladorVistas::class,'registro'])->name('rutaregistro');
Route::get('/',[controladorVistas::class,'inicio'])->name('rutainicio');
Route::get('/perfil',[controladorVistas::class,'perfil'])->name('rutaperfil');
Route::get('/carrito',[controladorVistas::class,'carrito'])->name('rutacarrito');

Route::get('/gestionProduct',[controladorVistas::class,'gestionProduct'])->name('rutagestionproduct');