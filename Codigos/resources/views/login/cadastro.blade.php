@extends('layout.tema')

@section('titulo','Cadastrar')

@section('conteudo')
  <div class = "container">
    <h3 class = "center">Cadastro de Usuários</h3>
      <form class="" action="{{route('site.salvarcadastro')}}" method="post">
        {{csrf_field()}}
        <div class="input-field">
          <input type="text" name="name" required autocomplete="no">
          <label>Nome</label>
        </div>

        <div class="input-field">
          <input type="email" name="email" required autocomplete="no">
          <label>E-mail</label>
        </div>

        <div class="input-field">
          <input type="password" name="password" required autocomplete="no">
          <label>Senha</label>
        </div>

        <div class="input-field">
          <input type="number" name="idade" required autocomplete="no">
          <label>Idade</label>
        </div>

        <div class="input-field">
          <input type="text" name="telefone" autocomplete="no">
          <label>Telefone</label>
        </div>

        <div class="input-field">
          <input type="text" name="endereco" required autocomplete="no">
          <label>Endereço</label>
        </div>

        <div class="input-field">
          <input type="text" name="cidade" required autocomplete="no">
          <label>Cidade</label>
        </div>

        <div class="file-field input-field">
          <div class="btn grey">
            <span>Imagem</span>
            <input type="file" name="imagem">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
        </div>
        <button class="btn teal darken-4">Cadastrar</button>
      </form>
  </div>
@endsection
