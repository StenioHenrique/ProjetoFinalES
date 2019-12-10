<!DOCTYPE html>
<html>
 <head>
   <title>@yield('titulo')</title>
   <!--Import Google Icon Font-->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

   <!--Let browser know website is optimized for mobile-->
   <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 </head>

 <body>
     <header>
        <nav>
          <div class="nav-wrapper light-blue darken-4">
            <a href="/" class="brand-logo">Super Vizinhos</a>
            <ul class="right hide-on-med-and-down">
              @if(Auth::guest())
                <li><a href="{{route('bairro.cadastrar')}}">Cadastrar Bairro</a></li>
                <li><a href="{{route('bairro.listar')}}">Listar Bairros</a></li>
                <li><a href="{{route('site.cadastrar')}}">Cadastrar</a></li>
                <li><a href="{{route('site.login')}}">Login</a></li>
              @else
                <li><a href="{{route('ocorrencias')}}">Ocorrências</a></li>
                <li><a href="{{route('plano.listar')}}">Planos de Ação</a></li>
                <li><a href="#">{{Auth::user()->name}}</a></li>
                <li><a href="{{route('site.login.sair')}}">Sair</a></li>

              @endif


            </ul>
          </div>
        </nav>

    </header>
