<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanoDeAcao extends Model
{
  protected $fillable = [
    'titulo', 'descricao', 'categoria_id', 'bairro_id'
  ];
}
