<?php

use App\Http\Controllers\Sys_usuarioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function() {
  return view('welcome');
});

//  Login
Route::get('/login', [Sys_usuarioController::class, 'viewLogin'])->name('login.view');
Route::post('/login', [Sys_usuarioController::class, 'login'])->name('login.post');

//  Administrador
Route::prefix('admin')->group(function() {

  Route::get('/main', function() {
    return "Dashboard principal";
  });

  Route::get('/estudios', function() {
    return "Estudios";
  });

  Route::get('/economia', function() {
    return "Economía";
  });

  Route::get('/reportes', function() {
    return "Reportes";
  });

  Route::get('constancias', function() {
    return "Constancias";
  });

  Route::get('/facultad', function() {
    return "Facultad";
  });

  Route::get('/admin', function() {
    return "Admin";
  });

});

//  Docente investigador
Route::prefix('investigador')->group(function() {

  Route::get('/main', function() {
    return "Dashboard";
  });

  Route::get('/actividades', function() {
    return "Actividades del investigador";
  });

  Route::get('/publicaciones', function() {
    return "Publicaciones";
  });

  Route::get('/grupo', function() {
    return "Grupo del investigador";
  });

  Route::get('/convocatorias', function() {
    return "Convocatorias";
  });

  Route::get('/informes', function() {
    return "Informes";
  });

});
