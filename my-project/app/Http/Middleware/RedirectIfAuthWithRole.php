<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthWithRole {
  /**
    * Middleware para redirigir al usuario en base a su rol (ADMIN, INVESTIGADOR, ETC):
    * 1. Ver el tipo de rol que tiene el usuario.
    * 2. Redirigirlo en base a esto (sino tiene autenticación enviarlo al login).
   */
  public function handle(Request $request, Closure $next): Response {
    if (Gate::allows('admin-access')) {
      return redirect()->route('admin.main');
    } elseif (Gate::allows('investigador-access')) {
      return redirect()->route('invest.main');
    } else {
      return $next($request);
    }
  }
}
