<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Chamado;

class Demanda extends Model
{
    protected $fillable = ['descricao'];

    public function chamados()
    {
        return $this->hasMany(Chamado::class);
    }
}
