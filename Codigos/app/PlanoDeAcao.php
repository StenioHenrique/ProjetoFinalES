<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanoDeAcao extends Model
{
  protected $fillable = [
    'titulo', 'descricao', 'categoria_id', 'bairro_id'
  ];

  public function categoria()
  {
    return $this->belongsTo('App\Categoria');
  }

  public function bairro()
  {
    return $this->belongsTo('App\bairro');
  }
}
