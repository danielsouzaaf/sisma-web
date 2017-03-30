<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ocorrencia;
use App\Demanda;
use App\Status;
use App\Atribuicao;
use App\ObsChamado;

class Chamado extends Model
{
    public function ocorrencias()
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

    public function atribuicoes()
    {
        return $this->belongsToMany(Atribuicao::class, '');
    }

    public function observacoes()
    {
        return $this->hasMany(ObsChamado::class);
    }
}
