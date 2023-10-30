<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class CheckRole {
  /**
    * Middleware para validar la ruta a la que accede el usuario (ADMIN, INVESTIGADOR, ETC):
    * 1. Validar que haya un usuario autenticado -> Si no hay usuario autenticado enviarlo al login.
    * 2. Ver el tipo de rol que tiene el usuario.
    * 3. Si coincide el rol con el grupo de ruta ('routes/web.php') sigue, sino muestra mensaje de error.
   */
  public function handle(Request $request, Closure $next, String $role): Response {
    if (Auth::check()) {
      if (!Gate::allows($role . '-access')) {
        abort(403, 'No tienes permiso para acceder a esta ruta');
      }
      return $next($request);
    }
    return redirect()->route('login');
  }
}
