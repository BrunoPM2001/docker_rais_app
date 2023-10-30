<?php

namespace App\Providers;

use App\Models\Sys_usuario;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider {
  /**
   * The model to policy mappings for the application.
   *
   * @var array<class-string, class-string>
  */
  protected $policies = [
    //
  ];

  /**
   * Register any authentication / authorization services.
  */
  public function boot(): void {
    
    //  Acceso de administrador
    Gate::define('admin-access', function(Sys_usuario $usuario) {
      return $usuario->rol_id == 1;
    });

    //  Acceso de investigador
    Gate::define('investigador-access', function(Sys_usuario $usuario) {
      return $usuario->rol_id == 2;
    });
  }
}
