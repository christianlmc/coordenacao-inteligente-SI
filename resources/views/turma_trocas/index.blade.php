@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Minhas trocas</div>
        @if (session('message'))
        <div class="card-body">
          <div class="alert alert-success h4" role="alert">
            <strong>{{ session('message') }}</strong>
          </div>
        </div>
        @endif
        <div class="card-body">
          <a href="{{ route('turma_trocas.nova')}}" role="button"
            class="btn text-uppercase btn-primary btn-lg btn-block">Nova Troca</a>
        </div>
        <div class="card-body">
          @foreach ($trocas as $troca)
          <h4>
            {{ $troca->turma_origem->disciplina->nome }}: {{ $troca->turma_origem->letra }}
            -->
            {{ $troca->turma_destino->disciplina->nome }}: {{ $troca->turma_destino->letra }}
          </h4>

          <hr>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
