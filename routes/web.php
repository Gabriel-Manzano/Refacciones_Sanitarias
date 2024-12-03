<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
//Gestion de usuarios
Route::prefix('/admin/users')->group(function () {
    Route::get('/', [UsuarioController::class, 'index'])->name('admin.users.index');
    Route::get('/create', [UsuarioController::class, 'create'])->name('admin.users.create');
    Route::post('/', [UsuarioController::class, 'store'])->name('admin.users.store');
    Route::get('/{usuario}/edit', [UsuarioController::class, 'edit'])->name('admin.users.edit');
    Route::put('/{usuario}', [UsuarioController::class, 'update'])->name('admin.users.update');
    Route::delete('/{usuario}', [UsuarioController::class, 'destroy'])->name('admin.users.destroy');
});

//

Route::get('/registro',[controladorVistas::class,'registro'])->name('rutaregistro');
Route::get('/',[controladorVistas::class,'inicio'])->name('rutainicio');
Route::get('/perfil',[controladorVistas::class,'perfil'])->name('rutaperfil');
Route::get('/carrito',[controladorVistas::class,'carrito'])->name('rutacarrito');

Route::get('/gestionProduct',[controladorVistas::class,'gestionProduct'])->name('rutagestionproduct');

//login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.process');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//dashboards
Route::get('/admin/dashboard', function () {return view('profile.partials.adminDashboard');})->name('admin.dashboard');
Route::get('/user/dashboard', function () {return view('profile.partials.userDashboard');})->name('user.dashboard');

//CRUD de productos
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
