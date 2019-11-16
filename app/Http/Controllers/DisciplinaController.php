<?php

namespace App\Http\Controllers;

use App\Departamento;
use App\Disciplina;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    public function index()
    {
        $departamentos = Departamento::all('nome', 'id')->sortBy('nome');

        return view('disciplinas.index', compact('departamentos', $departamentos));
    }

    public function buscar(Request $request)
    {
        $com_vagas = $request->has('vagas');
        $disciplinas = Disciplina::with('turmas')
            ->where('departamento_id', $request->departamento)
            ->where('nome', 'like', "%{$request->disciplina}%")
            ->when($com_vagas, function ($query) {
                $query->whereHas('turmas', function ($query) {
                    $query->where('vagas_disponiveis', '>', 0);
                });
            })->get();

            return view('disciplinas.busca', compact('disciplinas', $disciplinas));
    }
}
