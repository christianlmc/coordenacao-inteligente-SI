<?php

namespace App\Http\Controllers;

use App\Departamento;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    public function index()
    {
        $departamentos = Departamento::all('nome', 'id')->sortBy('nome');

        return view('disciplinas.buscar', compact('departamentos', $departamentos));
    }

    public function buscar(Request $request)
    {
        return "buscador";
    }
}
