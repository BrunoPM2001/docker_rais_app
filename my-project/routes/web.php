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

//  Login - TODO * VER LA MANERA EN LA QUE ALGÚN MIDDLEWARE PERMITA LA REDIRECCIÓN POR SESIONES O IMPLEMENTAR UNO
Route::view('login', 'login.main')->middleware('checkLoginAndRole')->name('login');
Route::post('/login', [Sys_usuarioController::class, 'login'])->name('login.post');

//  Administrador
Route::prefix('admin')->middleware('checkRole:admin')->group(function() {

  Route::get('/main', function() {
    return view('admin.main');
  })->name('admin.main');

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
Route::prefix('investigador')->middleware('checkRole:investigador')->group(function() {

  Route::get('/main', function() {
    return "Dashboard";
  })->name('invest.main');

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
