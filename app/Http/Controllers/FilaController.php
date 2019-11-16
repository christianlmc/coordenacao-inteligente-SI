<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Departamento;
use Illuminate\Http\Request;

class FilaController extends Controller
{
    public function agendar()
    {
        $departamentos = Departamento::all('nome', 'id')->sortBy('nome');
        $cursos = Curso::all()->sortBy('nome');

        return view('filas.agendar', compact('departamentos', 'cursos'));
    }

    public function criar(Request $request)
    {
        dd($request->all());
    }
}
