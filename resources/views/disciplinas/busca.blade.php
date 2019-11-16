@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Buscador de Disciplinas - Resultados da Busca</div>
                <div class="card-body">
                    <a href="{{ route('disciplinas.index')}}" role="button" class="btn text-uppercase btn-primary btn-lg btn-block">Voltar para o buscador</a>
                </div>
                @foreach ($disciplinas as $disciplina)
                <div class="card-body">
                    <div class="card">
                        <div class="card-header h4 bg-dark text-white">{{$disciplina->nome}}</div>
                        <div class="card-body">
                            <ul class="list-group">
                                @foreach ($disciplina->turmas as $turma)
                                <li class="list-group-item bg-success text-white">
                                    <h4>Turma {{$turma->letra}}</h4>
                                    <div>Vagas totais: {{$turma->vagas_total}}</div>
                                    <div>Vagas disponiveis: {{$turma->vagas_disponiveis}}</div>
                                    <div>Vagas ocupadas: {{$turma->vagas_ocupadas}}</div>
                                </li>
                                @endforeach
                                @if ($disciplina->turmas->isEmpty())
                                    <h4>Não há turmas para esta disciplina</h4>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
