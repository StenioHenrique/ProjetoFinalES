@extends('layout.tema')

@section('titulo','Ocorrências')

@section('conteudo')
  <div class = "container">
    <h3 class = "center">Editar Ocorrência</h3>
      <form class="" action="{{route('ocorrencias.atualizar', $registro->id)}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="put">
        @include('ocorrencias._form')
        <button class="btn btn-danger teal darken-4" onclick="return confirm('Tem certeza que deseja editar essa Ocorrência?')">Editar</button>
      </form>
  </div>
@endsection
