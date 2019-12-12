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
          </tr>
        </thead>
        <tbody>
          @foreach($registros as $registro)
            <tr>
                <td>{{ $registro->nome}}</td>
                <td>
                  <a class="btn btn-danger red lighten-1" onclick="return confirm('Tem certeza que deseja excluir essa categoria?')" href="{{route('categoria.deletar', $registro->id)}}">Excluir</a>
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
