<?php

namespace App\Http\Controllers;

use App\Departamento;
use App\TurmaTroca;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrocaTurmaController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        $trocas = TurmaTroca::where('user_id', $user_id)->get();

        return view('turma_trocas.index', compact('trocas', $trocas));
    }
    public function nova()
    {
        return view('turma_trocas.nova');
    }

    public function criar(Request $request)
    {
        $user_id = Auth::id();

        $troca = TurmaTroca::create([
            'user_id' => $user_id,
            'turma_origem_id' => $request->turma_origem,
            'turma_destino_id' => $request->turma_destino,
        ]);

        return redirect('minhas-trocas')->with('message', 'Troca salva com sucesso');
    }
}
