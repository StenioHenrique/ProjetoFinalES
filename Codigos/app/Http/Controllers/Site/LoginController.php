<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
      return view('login.index');
    }

    public function entrar(Request $req)
    {
      $dados = $req->all();
      if(auth::attempt(['email'=>$dados['email'], 'password'=>$dados['password']]))
      {
        return redirect()->route('site.home');
      } else {
        return redirect()->route('site.login');
      }
    }

    public function sair()
    {
      Auth::logout();
      return redirect()->route('site.login');
    }

    public function cadastrar()
    {
      return view('login.cadastro');
    }

    public function salvarcadastro(Request $req)
    {
      $dados = $req->all();
      $dados['password'] = bcrypt($req['password']);
      user::create($dados);
      return redirect()->route('site.login');
    }
}
