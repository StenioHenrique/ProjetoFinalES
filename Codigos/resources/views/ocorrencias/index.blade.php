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
              <td>{{ $registro->nome}}</td>
              <td>{{ $registro->email}}</td>
              <td><img src = "{{asset($registro->imagem)}}" alt = "{{$registro->titulo}}" width ="150" height="60" /></td>
              <td>
                <a class="btn deep-orange" href="{{route('ocorrencias.editar', $registro->id)}}">Editar</a>
                <a class="btn btn-danger red" onclick="return confirm('Tem certeza que deseja excluir essa Ocorrência?')" href="{{route('perfil.apagar', $registro->id)}}">Excluir</a>

              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
