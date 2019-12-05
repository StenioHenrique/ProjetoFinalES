@extends('layout.tema')

@section('titulo','Super Vizinhos')

@section('conteudo')
  <div class = "container">
    <h3 class = "center">Login</h3>
      <form class="" action="{{route('site.entrar')}}" method="post">
        {{csrf_field()}}

        <div class="input-field">
          <input type="email" name="email" required>
          <label>E-mail</label>
        </div>

        <div class="input-field">
          <input type="password" name="password" required>
          <label>Senha</label>
        </div>
        <button class="btn teal darken-4">Login</button>
      </form>
  </div>
@endsection
