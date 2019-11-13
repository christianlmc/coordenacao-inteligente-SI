<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $fillable = [
        'letra',
        'disciplina_id',
        'vagas_total',
        'vagas_ocupadas',
        'vagas_disponiveis'
    ];
}
