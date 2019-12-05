<?php

namespace App\Http\Controllers\Site;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ocorrencia;

class HomeController extends Controller
{
    public function index()
    {
      $ocorrencias = Ocorrencia::all();
      return view('home', compact('ocorrencias'));
    }
}
