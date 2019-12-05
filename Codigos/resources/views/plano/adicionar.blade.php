@extends('layout.tema')

@section('titulo','Cadastrar')

@section('conteudo')
  <div class = "container">
    <h3 class = "center">Cadastro de Plano de Ação</h3>
      <form class="" action="{{route('plano.salvar')}}" method="post">
        {{csrf_field()}}
        <div class="input-field">
          <input type="text" name="titulo" required autocomplete="no">
          <label>Título</label>
        </div>

        <div class="input-field">
          <input type="text" name="descricao" required autocomplete="no">
          <label>Descricao</label>
        </div>

        <label>Categoria</label>
        <select class="browser-default" name="categoria_id" id = "categoriaPlano">

        </select>

        <label>Bairro que se aplica</label>
        <select class="browser-default" name="bairro_id" id = "bairroUser">

        </select>

        <button class="btn teal darken-4">Salvar</button>
    </div>

@endsection
