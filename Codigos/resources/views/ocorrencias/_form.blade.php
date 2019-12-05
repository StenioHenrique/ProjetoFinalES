<div class="input-field">
  <input type="text" name="titulo" value="{{isset($registro->titulo) ? $registro->titulo : ''}}" required autocomplete="no">
  <label>Título</label>
</div>

<div class="input-field">
  <input type="text" name="descricao" value="{{isset($registro->descricao) ? $registro->descricao : ''}}" required autocomplete="no">
  <label>Descrição</label>
</div>

<div class="input-field">
  <input type="text" name="endereco" value="{{isset($registro->endereco) ? $registro->endereco : ''}}" required autocomplete="no">
  <label>Endereço</label>
</div>

<div class="input-field">
  <input type="text" name="bairro" value="{{isset($registro->bairro) ? $registro->bairro : ''}}" required autocomplete="no">
  <label>Bairro</label>
</div>

<div class="input-field">
  <input type="text" name="cidade" value="{{isset($registro->cidade) ? $registro->cidade : ''}}" required autocomplete="no">
  <label>Cidade</label>
</div>

<div class="input-field">
  <input type="datetime-local" name="data" value="{{isset($registro->data) ? $registro->data : ''}}">
</div>

<div class="file-field input-field">
  <div class="btn grey">
    <span>Imagem</span>
    <input type="file" name="imagem">
  </div>
  <div class="file-path-wrapper">
    <input class="file-path validate" type="text">
  </div>
</div>
@if(isset($registro->imagem))
  <div class="input-field">
    <img width="150" src="{{asset($registro->imagem)}}" />
  </div>
@endif
