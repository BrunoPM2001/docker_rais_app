<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Sys_usuario extends Authenticatable {
    
  use HasFactory;

  protected $table = 'sys_usuario1';
  protected $primaryKey = 'id';

}
