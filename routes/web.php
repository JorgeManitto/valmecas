<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArchivosController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmpresasValvulasController;
use App\Http\Controllers\MarcasValvulasController;
use App\Http\Controllers\ValvulasController;
use Illuminate\Support\Facades\Route;

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
    Route::get('admin/valvulas/{id}/edit', [ValvulasController::class, 'edit'])->name('valvulas.edit');
    Route::put('admin/valvulas/{id}', [ValvulasController::class, 'update'])->name('valvulas.update');
    Route::delete('admin/valvulas/{id}', [ValvulasController::class, 'destroy'])->name('valvulas.destroy');
    Route::get('admin/valvulas/{id}', [ValvulasController::class, 'show'])->name('valvulas.show');

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
    


    Route::get('admin/archivos', [ArchivosController::class, 'index'])->name('archivos');

    Route::get('/admin/onworikingview', function () {
        return view('admin.onworkingview');
    })->name('onworikingview');
});
