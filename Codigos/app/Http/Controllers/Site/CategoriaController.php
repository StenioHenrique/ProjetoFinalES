<?php

namespace App\Http\Controllers\Site;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
{
  public function indexJson()
  {
    $registros = Categoria::all();
    return json_encode($registros);
  }

  public function cadastro()
  {
    return view('categoria.adicionar');
  }

  public function salvar(Request $req)
  {
    $dados = $req->all();

    Categoria::create($dados);

    return redirect()->route('plano.cadastrar');
  }
}
