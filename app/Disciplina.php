<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    protected $fillable = ['nome', 'departamento_id'];

    public function turmas()
    {
        return $this->hasMany('App\Turma', 'disciplina_id');
    }
}
