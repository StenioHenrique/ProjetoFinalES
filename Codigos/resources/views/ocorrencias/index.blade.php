@extends('layout.tema')

@section('titulo','Ocorrências')

@section('conteudo')
  <div class = "container">
    <h3 class = "center">Lista de ocorrencias</h3>
    <div class = "row">
      <table>
        <thead>
          <tr>
            <th>Título</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Descrição</th>
            <th>Imagem</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
          @foreach($registros as $registro)
            <tr>
              <td>{{ $registro->titulo}}</td>
              <td>{{ $registro->endereco}}</td>
              <td>{{ $registro->bairro}}</td>
              <td>{{ $registro->cidade}}</td>
              <td>{{ $registro->descricao}}</td>
              <td><img src = "{{asset($registro->imagem)}}" alt = "{{$registro->titulo}}" width ="150" height="60" /></td>
              <td>
                <a class="btn cyan darken-4" href="{{route('ocorrencias.editar', $registro->id)}}">Editar</a>
                <a class="btn btn-danger red lighten-1" onclick="return confirm('Tem certeza que deseja excluir essa Ocorrência?')" href="{{route('ocorrencias.deletar', $registro->id)}}">Excluir</a>

              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="row">
      <a class="btn light-blue darken-4" href="{{route('ocorrencias.adicionar')}}">Adicionar Ocorrência</a>
    </div>
  </div>
@endsection
