<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TurmaTroca extends Model
{
    protected $fillable = [
        'user_id',
        'turma_origem_id',
        'turma_destino_id',
    ];
}
