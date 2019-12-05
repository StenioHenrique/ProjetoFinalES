@extends('layout.tema')

@section('titulo','Cadastrar')

@section('conteudo')
<div class = "container">
  <h3 class = "center">Cadastrar Categoria</h3>
    <form class="" action="{{route('categoria.salvar')}}" method="post">
      {{csrf_field()}}
      <div class="input-field">
        <input type="text" name="nome" required autocomplete="no">
        <label>Nome</label>
      </div>
      <button class="btn teal darken-4">Salvar</button>
    </form>
  </div>

@endsection
