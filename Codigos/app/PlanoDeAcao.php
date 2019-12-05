<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanoDeAcao extends Model
{
  protected $fillable = [
    'titulo', 'descricao', 'id_categoria', 'id_bairro'
  ];
}
