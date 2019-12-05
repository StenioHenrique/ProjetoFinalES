<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class PerfilController extends Controller
{
  public function visualizar($id)
  {
    $registros = User::find($id);
    return view('perfil.index', compact('registros'));
  }
}
