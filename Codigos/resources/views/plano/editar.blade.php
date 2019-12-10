@extends('layout.tema')

@section('titulo','Cadastrar')

@section('conteudo')
  <div class = "container">
    <h3 class = "center">Editar Plano de Ação</h3>
      <form class="" action="{{route('plano.atualizar', $registro->id)}}" method="post">
        {{csrf_field()}}
        <div class="input-field">
          <input type="text" name="titulo"  value="{{$registro->titulo}}" required autocomplete="no">
          <label>Título</label>
        </div>

        <div class="input-field">
          <input type="text" name="descricao"  value="{{$registro->titulo}}" required autocomplete="no">
          <label>Descricao</label>
        </div>

        <label>Categoria</label>
        <select class="browser-default" name = "categoria_id" id = "categoriaPlano">
        </select>

        <label>Bairro que se aplica</label>
        <select class="browser-default" name= "bairro_id" id = "bairroUser">

        </select>
        <button class="btn btn-danger teal darken-4" onclick="return confirm('Tem certeza que deseja editar essa Ocorrência?')">Editar</button>
    </div>
@endsection
