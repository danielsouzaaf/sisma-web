<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ocorrencia extends Model
{

    protected $fillables = [
      'local', 'solicitante_id', 'foto', 'descricao', 'created_at'
  ];

  public function solicitante()
  {
    return $this->belongsTo('App\Solicitante');
  }

  public function getFillables()
  {
    return $this->fillables;
  }

  public function chamado()
  {
      return $this->belongsTo('App\Chamado');
  }

}
