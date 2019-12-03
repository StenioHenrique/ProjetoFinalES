<?php

namespace App\Http\Controllers\Ocorrencias;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ocorrencia;

class OcorrenciaController extends Controller
{
    public function index()
    {
      $registros = Ocorrencia::all();
      return view('ocorrencias.index', compact('registros'));
    }

    public function adicionar()
    {
      return view('ocorrencias.adicionar');
    }

    public function salvar(Request $req)
    {
      $dados = $req->all();

      if($req->hasFile('imagem'))
      {
        $imagem = $req->file('imagem');
        $num = rand(1111,9999);
        $dir = "img/ocorrencias/";
        $ext = $imagem->guessClientExtension();
        $nomeImagem = "imagem_".$num.".".$ext;
        $imagem->move($dir,$nomeImagem);
        $dados['imagem'] = $dir."/".$nomeImagem;
      }

      Ocorrencia::create($dados);

      return redirect()->route('ocorrencias');
    }

    public function editar($id)
    {
      $registro = Ocorrencia::find($id);
      return view('ocorrencias.editar', compact('registro'));

    }

    public function atualizar(Request $req, $id)
    {
      $dados = $req->all();

      if($req->hasFile('imagem'))
      {
        $imagem = $req->file('imagem');
        $num = rand(1111,9999);
        $dir = "img/ocorrencias/";
        $ext = $imagem->guessClientExtension();
        $nomeImagem = "imagem_".$num.".".$ext;
        $imagem->move($dir,$nomeImagem);
        $dados['imagem'] = $dir."/".$nomeImagem;
      }

      Ocorrencia::find($id)->update($dados);

      return redirect()->route('ocorrencias');
    }

    public function deletar($id)
    {
      Ocorrencia::find($id)->delete();
      return redirect()->route('ocorrencias');
    }
}
