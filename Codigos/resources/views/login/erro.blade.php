@extends('layout.tema')

@section('titulo','Super Vizinhos')

@section('conteudo')

<section>
  <h1 class="center">Senha incorreta</h1>
  <p class="center">A senha ou usuário digitado estão incorretos. Use o link a seguir pra voltar a tela de login e tentar novamente. <a href="{{route('site.login')}}"> Fazer login </a></p>
</section>

@endsection
