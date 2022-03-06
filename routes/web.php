<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', HomeController::class);

// Route::controller(CursoController::class)->group(function(){
//     Route::get('cursos', 'index')->name('cursos.index');
//     Route::post('cursos', 'store')->name('cursos.store');
//     Route::get('cursos/create', 'create')->name('cursos.create');
//     Route::get('cursos/{id}', 'show')->name('cursos.show');
//     Route::get('cursos/{curso}/edit', 'edit')->name('cursos.edit');
//     Route::put('cursos/{curso}/edit', 'update')->name('cursos.update');
//     Route::delete('cursos/{curso}', 'destroy')->name('cursos.destroy');
// });

// Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
//     if ($categoria) {
//         return "Bienvenido al curso $curso, de la categoria $categoria";
//     } else {
//         return "Bienvenido al curso: $curso";
//     }
// });

Route::resource('cursos', CursoController::class);

// Route::resource('asignaturas', CursoController::class)
//     ->parameters(['asignaturas' => 'curso']) // para poner los nombres de los parametros
//     ->names('cursos'); // para poner los nombres de las rutas