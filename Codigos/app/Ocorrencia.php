<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ocorrencia extends Model
{
  protected $fillable = [
    'titulo', 'descricao', 'endereco', 'bairro', 'cidade', 'imagem', 'data'
  ];

  public function user()
  {
    return $this->belongsTo('User');
  }

}
