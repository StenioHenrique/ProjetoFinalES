@extends('layout.tema')

@section('titulo','Ocorrências')

@section('conteudo')
  <div class = "container">
    <h3 class = "center">Denunciar Ocorrência</h3>
      <form class="" action="{{route('ocorrencias.salvar')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        @include('ocorrencias._form')

        <button class="btn teal darken-4">Salvar</button>
      </form>
  </div>
@endsection
