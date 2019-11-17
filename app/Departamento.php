<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $fillable = ['nome'];

    public function disciplinas()
    {
        return $this->hasMany('App\Disciplina', 'departamento_id');
    }

    public function filas()
    {
        return $this->hasMany('App\Fila')->orderBy('created_at', 'ASC');
    }
}
