<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fila extends Model
{
    protected $fillable = ['user_id', 'departamento_id'];

    public function departamento()
    {
        return $this->belongsTo('App\Departamento');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
