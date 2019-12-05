<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PlanoDeAcao;

class PlanoController extends Controller
{
  public function index()
  {
    $registros = PlanoDeAcao::all();
    return view('plano.index', compact('registros'));
  }

  public function cadastrar()
  {
    return view('plano.adicionar');
  }

  public function salvar(Request $req)
  {
    $dados = $req->all();
    PlanoDeAcao::create($dados);
    return redirect()->route('plano.listar');
  }

  public function editar($id)
  {
    $registro = PlanoDeAcao::find($id);
    return view('plano.editar', compact('registro'));

  }

  public function atualizar(Request $req, $id)
  {
    $dados = $req->all();

    PlanoDeAcao::find($id)->update($dados);

    return redirect()->route('plano.listar');
  }

  public function deletar($id)
  {
    PlanoDeAcao::find($id)->delete();
    return redirect()->route('plano.listar');
  }
}
