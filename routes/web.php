<?php

use App\Http\Controllers\CursosController;
use App\Http\Controllers\HomeController;
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
/*
Route::get('/', HomeController::class);

Route::get('/cursos', [CursosController::class,'index'])->name('cursos.index');

Route::get('/create',[CursosController::class,'create'])->name('cursos.create');

Route::post('cursos',[CursosController::class,'store'])->name('cursos.store');

Route::get('/curso/{curso}', [CursosController::class,'show'])->name('cursos.show');

Route::get('/curso/{curso}/edit',[CursosController::class,'edit'])->name('cursos.edit');

Route::put('/curso/{curso}', [CursosController::class,'update'])->name('cursos.update');

Route::delete('/curso/{curso}', [CursosController::class,'destroy'])->name('cursos.destroy');
*/

Route::resource('asignaturas', CursosController::class)->parameters(['asignaturas'=>'curso'])->names('cursos');