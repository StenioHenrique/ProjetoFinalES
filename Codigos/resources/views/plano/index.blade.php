@extends('layout.tema')

@section('titulo','Plano de Ação')

@section('conteudo')
  <div class = "container">
    <h3 class = "center">Planos de Ação</h3>
    <div class = "row">
      <table>
        <thead>
          <tr>
            <th>Título</th>
            <th>Descricao</th>
            <th>Categoria</th>
            <th>Bairro que se aplica</th>
          </tr>
        </thead>
        <tbody>
          @foreach($registros as $registro)
            <tr>
              <td>{{ $registro->titulo}}</td>
              <td>{{ $registro->descricao}}</td>
              <td>{{ $registro->categoria_id}}</td>
              <td>{{ $registro->bairro_id}}</td>
              <td>
                <a class="btn cyan darken-4" href="{{route('plano.editar', $registro->id)}}">Editar</a>
                <a class="btn btn-danger red lighten-1" onclick="return confirm('Tem certeza que deseja excluir essa Ocorrência?')" href="{{route('plano.deletar', $registro->id)}}">Excluir</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="row">
      <a class="btn cyan darken-4" href="{{route('categoria.cadastro')}}">Criar Categoria</a>
      <a class="btn light-blue darken-4" href="{{route('plano.cadastrar')}}">Adicionar plano</a>
    </div>
  </div>
@endsection
