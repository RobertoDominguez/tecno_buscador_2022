<?php

use App\Http\Controllers\BuscadorController;
use App\Http\Controllers\EnlaceController;
use App\Http\Controllers\IndiceController;
use App\Http\Controllers\PalabraController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [BuscadorController::class, 'buscador'])->name('buscador');
Route::get('buscar', [BuscadorController::class, 'buscar'])->name('buscar');

Route::middleware(['guest:admin'])->group(function () {
    Route::get('login', [UsuarioController::class, 'loginView'])->name('login.view');
    Route::post('login', [UsuarioController::class, 'login'])->name('login.form');
});


Route::middleware(['auth:admin'])->group(function () {
    Route::post('logout', [UsuarioController::class, 'logout'])->name('logout');

    Route::get('reportes', [ReporteController::class, 'reportes'])->name('admin.reportes');

    Route::prefix('user')->group(function () {
        //LISTAR
        Route::get('index', [UsuarioController::class, 'index'])->name('user.index');
        //CREAR
        Route::get('create', [UsuarioController::class, 'create'])->name('user.create');
        Route::post('store', [UsuarioController::class, 'store'])->name('user.store');
        //MODIFICAR
        Route::get('edit/{user}', [UsuarioController::class, 'edit'])->name('user.edit');
        Route::post('update', [UsuarioController::class, 'update'])->name('user.update');
        //ELIMINAR
        Route::post('delete/{user}', [UsuarioController::class, 'destroy'])->name('user.destroy');
    });

    Route::prefix('enlace')->group(function () {
        //LISTAR
        Route::get('index', [EnlaceController::class, 'index'])->name('enlace.index');
        //CREAR
        Route::get('create', [EnlaceController::class, 'create'])->name('enlace.create');
        Route::post('store', [EnlaceController::class, 'store'])->name('enlace.store');
        //MODIFICAR
        Route::get('edit/{enlace}', [EnlaceController::class, 'edit'])->name('enlace.edit');
        Route::post('update/{enlace}', [EnlaceController::class, 'update'])->name('enlace.update');
        //ELIMINAR
        Route::post('delete/{enlace}', [EnlaceController::class, 'destroy'])->name('enlace.destroy');
    });

    Route::prefix('palabra')->group(function () {
        //LISTAR
        Route::get('index', [PalabraController::class, 'index'])->name('palabra.index');
        //CREAR
        Route::get('create', [PalabraController::class, 'create'])->name('palabra.create');
        Route::post('store', [PalabraController::class, 'store'])->name('palabra.store');
        //MODIFICAR
        Route::get('edit/{palabra}', [PalabraController::class, 'edit'])->name('palabra.edit');
        Route::post('update/{palabra}', [PalabraController::class, 'update'])->name('palabra.update');
        //ELIMINAR
        Route::post('delete/{palabra}', [PalabraController::class, 'destroy'])->name('palabra.destroy');
    });

    Route::prefix('indice')->group(function () {
        //LISTAR
        Route::get('index/{enlace}', [IndiceController::class, 'index'])->name('indice.index');
        //CREAR
        Route::get('create/{enlace}', [IndiceController::class, 'create'])->name('indice.create');
        Route::post('store/{enlace}', [IndiceController::class, 'store'])->name('indice.store');
        //ELIMINAR
        Route::post('delete/{enlace}/{indice}', [IndiceController::class, 'destroy'])->name('indice.destroy');
    });
});


Route::get('/update', function () {
    chdir('../');
    exec('composer update', $output);
    print_r($output);
});

// CU1: Gestion de Usuario
// CU2: Gestion de Enlaces/URL
// CU3: Gestion de Palabras
// CU4: Gestion de Indices
// CU5: Busquedas Basicas
// CU6: Busquedas Avanzadas
// CU7: Reportes
// CU8: Estadisticas