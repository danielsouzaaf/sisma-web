<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ocorrencia extends Model
{
  protected $fillable = [
      'descricao', 'demanda_id',
  ];
  
  public function demanda()
  {
    return $this->belongsTo('App\Demanda');
  }
}
