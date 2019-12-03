@extends('layout.tema')

@section('titulo','Ocorrências')

@section('conteudo')
  <div class = "container">
    <h3 class = "center">Lista de ocorrencias</h3>
    <div class="row">
      @foreach($ocorrencias as $ocorrencia)
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="{{asset($ocorrencia->imagem)}}">
            </div>
            <div class="card-content">
              <h4>{{$ocorrencia->titulo}}</h4>
              <p>{{$ocorrencia->descricao}}</p>
            </div>
            <div class="card-action">
              <a href="#">Detalhes</a>
            </div>
          </div>
        </div>
      @endforeach
  </div>
</div>
@endsection
