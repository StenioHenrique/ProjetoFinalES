@extends('layout.tema')

@section('titulo','Meu Perfil')

@section('conteudo')
  <div class = "container">
    <h3 class = "center">Meu Perfil</h3>
    <div class = "row">
      <table>
        <thead>
          <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Idade</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>CPF</th>
            <th>Imagem</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
          @foreach($registros as $registro)
            <tr>
              <td>{{ $registro->name}}</td>
              <td>{{ $registro->email}}</td>
                <a class="btn deep-orange" href="{{route('perfil.editar', $registro->id)}}">Editar Perfil</a>
                <a class="btn btn-danger red" onclick="return confirm('Tem certeza que deseja excluir esse perfil?')" href="{{route('perfil.deletar', $registro->id)}}">Apagar Perfil</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
