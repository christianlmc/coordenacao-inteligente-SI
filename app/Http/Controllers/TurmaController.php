<?php

namespace App\Http\Controllers;

use App\Disciplina;
use App\Turma;
use Illuminate\Http\Request;

class TurmaController extends Controller
{
    public function getTurmasByDisciplina(Disciplina $disciplina)
    {
        $turmas = Turma::where('disciplina_id', $disciplina->id)
                                    ->orderBy('letra')
                                    ->get();
        return $turmas;
    }
}
