@extends('layout.tema')

@section('titulo','Cadastrar')

@section('conteudo')
  <div class = "container">
    <h3 class = "center">Cadastro de Bairros</h3>
      <form class="" action="{{route('bairro.salvar')}}" method="post">

        {{csrf_field()}}

        <div class="input-field">
          <input type="text" name="bairro" required autocomplete="no">
          <label>Bairro</label>
        </div>

        <div class="input-field">
          <input type="text" name="cidade" required autocomplete="no">
          <label>Cidade</label>
        </div>

        <div class="input-field">
          <input type="text" name="estado" required autocomplete="no">
          <label>Estado</label>
        </div>
        
        <button class="btn teal darken-4">Cadastrar Bairro</button>
      </form>
  </div>
@endsection
