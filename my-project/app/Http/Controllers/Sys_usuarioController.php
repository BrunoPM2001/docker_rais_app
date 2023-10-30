<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Sys_usuarioController extends Controller {
  
  //  Login general
  public function login(Request $request) {

    //  Credenciales del login
    $credenciales = [
      'username' => $request->user,
      'password' => $request->pass
    ];

    if (Auth::attempt($credenciales)) {
      request()->session()->regenerate();

      //  Tipo de usuario
      $rol_id = Auth::user()->rol_id;

      //  Redirección según el tipo de usuario
      switch ($rol_id) {
        case 1:
          return redirect()->route('admin.main');
        case 2:
          return redirect()->route('invest.main');
      }
    }
    return "Fail :(";
  }
  
}
