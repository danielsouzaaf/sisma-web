<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ocorrencia;
use App\Demanda;
use App\Status;

class Chamado extends Model
{
    public function ocorrencia()
    {
        return $this->hasMany(Ocorrencia::class);
    }

    public function demanda()
    {
        return $this->belongsTo(Demanda::class);
    }

    public function status()
    {
        return $this->belongsTo( Status::class);
    }
}
