<?php

namespace App\Http\Controllers;

use App\Departamento;
use App\Fila;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FilaController extends Controller
{
    public function index()
    {
        $departamentos_id = Fila::where('user_id', Auth::id())->get('departamento_id');

        $departamentos = Departamento::find($departamentos_id);

        return view('filas.index', compact('departamentos'));
    }
    public function agendar()
    {
        $departamentos = Departamento::all('nome', 'id')->sortBy('nome');
        return view('filas.agendar', compact('departamentos'));
    }

    public function criar(Request $request)
    {
        Fila::create([
            'departamento_id' => $request->departamento,
            'user_id' => Auth::id()
        ]);

        return redirect()->route('filas.index')->with('message', 'Agendamento realizado com sucesso');
    }
}
