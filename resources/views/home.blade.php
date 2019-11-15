@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menu Principal</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Fila de Espera</h3>
                    <hr/>
                    <a href="{{ route('filas.agendar') }}" role="button" class="btn text-uppercase btn-primary btn-lg btn-block">Agendar Horário com Coordenador</a>
                    <a href="{{ route('filas.index') }}" role="button" class="btn text-uppercase btn-primary btn-lg btn-block">Visualizar Fila do Coordenador</a>

                    <h3 class="mt-5">Turmas e Trocas</h3>
                    <hr/>
                    <a href="{{ route('disciplinas.buscar') }}" role="button" class="btn text-uppercase btn-success btn-lg btn-block">Buscador de Disciplinas</a>
                    <a href="{{ route('turma_trocas.novo') }}" role="button" class="btn text-uppercase btn-secondary btn-lg btn-block">Troca de Turma</a>
                    <a href="{{ route('turma_trocas.index') }}" role="button" class="btn text-uppercase btn-secondary btn-lg btn-block">Visualizar minhas Trocas</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
