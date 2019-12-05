<?php

namespace App\Http\Controllers\Site;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Bairro;

class BairroController extends Controller
{
  public function index()
  {
    $registros = Bairro::all();
    return view('bairro.index', compact('registros'));
  }

  public function cadastrar()
  {
    return view('bairro.adicionar');
  }

  public function salvar(Request $req)
  {
    $dados = $req->all();

    Bairro::create($dados);

    return redirect()->route('bairro.listar');
  }

  public function indexJson()
  {
    $registros = Bairro::all();
    return json_encode($registros);
  }
}
