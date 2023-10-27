<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Sys_usuarioController extends Controller {

  public function viewLogin() {
    return view("login.admin");
  }
  
  //  Login general
  public function login(Request $request) {
    //  Credenciales para el login
    $credenciales = [
      'username' => $request->user,
      'password' => $request->pass
    ];
    //  Ejecutar el intento de login
    if (Auth::attempt($credenciales)) {
      return "Success";
    }
    return "Fail :(";
  }
}
