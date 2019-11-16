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

    public function turma_origem()
    {
        return $this->belongsTo('App\Turma', 'turma_origem_id');
    }

    public function turma_destino()
    {
        return $this->belongsTo('App\Turma', 'turma_destino_id');
    }
}
