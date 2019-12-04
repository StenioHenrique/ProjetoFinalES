@extends('layout.tema')

@section('titulo','Cadastrar')

@section('conteudo')
  <div class = "container">
    <h3 class = "center">Cadastro de Usuários</h3>
      <form class="" action="{{route('site.salvarcadastro')}}" method="post">
        {{csrf_field()}}
        <div class="input-field">
          <input type="text" name="name" required>
          <label>Nome</label>
        </div>

        <div class="input-field">
          <input type="email" name="email" required>
          <label>E-mail</label>
        </div>

        <div class="input-field">
          <input type="password" name="password" required>
          <label>Senha</label>
        </div>
        <button class="btn btn-danger deep-blue">Cadastrar</button>
      </form>
  </div>
@endsection
