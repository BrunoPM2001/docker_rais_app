<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller {
  //  Login para admins
  public function loginAdmin() {
    return view("login.admin");
  }

  //  Login para investigadores
  public function loginInvestigador() {
    return view("login.investigador");
  }
}
