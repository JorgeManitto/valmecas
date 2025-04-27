<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArchivosController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmpresasValvulasController;
use App\Http\Controllers\MarcasValvulasController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\PurgadoresController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ValvulasController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('dashboard');
    }
    return view('welcome');
})->name('home');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('dashboard');

    // VALVULAS
    Route::get('admin/valvulas', [ValvulasController::class, 'index'])->name('valvulas');
    Route::get('admin/valvulas/create', [ValvulasController::class, 'create'])->name('valvulas.create');
    Route::post('admin/valvulas', [ValvulasController::class, 'store'])->name('valvulas.store');
    Route::get('admin/valvulas/{id?}/edit', [ValvulasController::class, 'edit'])->name('valvulas.edit');
    Route::put('admin/valvulas/{id?}', [ValvulasController::class, 'update'])->name('valvulas.update');
    Route::delete('admin/valvulas/{id?}', [ValvulasController::class, 'destroy'])->name('valvulas.destroy');
    Route::get('admin/valvulas/{id?}', [ValvulasController::class, 'show'])->name('valvulas.show');

    // Empresas vavulas
    Route::get('admin/clientes/valvulas', [EmpresasValvulasController::class, 'index'])->name('clientes.valvulas');
    Route::get('admin/clientes/valvulas/create', [EmpresasValvulasController::class, 'create'])->name('clientes.valvulas.create');
    Route::post('admin/clientes/valvulas', [EmpresasValvulasController::class, 'store'])->name('clientes.valvulas.store');
    Route::get('admin/clientes/valvulas/{id}/edit', [EmpresasValvulasController::class, 'edit'])->name('clientes.valvulas.edit');
    Route::put('admin/clientes/valvulas/{id}', [EmpresasValvulasController::class, 'update'])->name('clientes.valvulas.update');
    Route::delete('admin/clientes/valvulas/{id}', [EmpresasValvulasController::class, 'destroy'])->name('clientes.valvulas.destroy');

    // Empresas vavulas
    Route::get('admin/marcas/valvulas', [MarcasValvulasController::class, 'index'])->name('marcas.valvulas');
    Route::get('admin/marcas/valvulas/create', [MarcasValvulasController::class, 'create'])->name('marcas.valvulas.create');
    Route::post('admin/marcas/valvulas', [MarcasValvulasController::class, 'store'])->name('marcas.valvulas.store');
    Route::get('admin/marcas/valvulas/{id}/edit', [MarcasValvulasController::class, 'edit'])->name('marcas.valvulas.edit');
    Route::put('admin/marcas/valvulas/{id}', [MarcasValvulasController::class, 'update'])->name('marcas.valvulas.update');
    Route::delete('admin/marcas/valvulas/{id}', [MarcasValvulasController::class, 'destroy'])->name('marcas.valvulas.destroy');
    
    // Purgadores
    Route::get('admin/purgadores', [PurgadoresController::class, 'index'])->name('purgadores');
    Route::get('admin/purgadores/create', [PurgadoresController::class, 'create'])->name('purgadores.create');
    Route::post('admin/purgadores', [PurgadoresController::class, 'store'])->name('purgadores.store');
    Route::get('admin/purgadores/{id}/edit', [PurgadoresController::class, 'edit'])->name('purgadores.edit');
    Route::put('admin/purgadores/{id}', [PurgadoresController::class, 'update'])->name('purgadores.update');
    Route::delete('admin/purgadores/{id}', [PurgadoresController::class, 'destroy'])->name('purgadores.destroy');
    Route::get('admin/purgadores/{id}', [PurgadoresController::class, 'show'])->name('purgadores.show');

    Route::resource('admin/usuarios', UserController::class)->names([
        'index' => 'usuarios',
        'create' => 'usuarios.create',
        'store' => 'usuarios.store',
        'show' => 'usuarios.show',
        'edit' => 'usuarios.edit',
        'update' => 'usuarios.update',
        'destroy' => 'usuarios.destroy'
    ]);
    Route::resource('admin/pedidos', PedidosController::class)->names([
        'index' => 'pedidos',
        'create' => 'pedidos.create',
        'store' => 'pedidos.store',
        'show' => 'pedidos.show',
        'edit' => 'pedidos.edit',
        'update' => 'pedidos.update',
        'destroy' => 'pedidos.destroy'
    ]);
    Route::post('admin/pedidos/agregaroperario', [PedidosController::class, 'agregarOperario'])->name('pedidos.agregarOperario');
    Route::post('admin/pedidos/eliminarOperario', [PedidosController::class, 'eliminarOperario'])->name('pedidos.eliminarOperario');

    Route::get('admin/archivos', [ArchivosController::class, 'index'])->name('archivos');

    Route::get('/admin/onworikingview', function () {
        return view('admin.onworkingview');
    })->name('onworikingview');
});

Route::get('/clear-cache', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return 'Cache cleared!';
});