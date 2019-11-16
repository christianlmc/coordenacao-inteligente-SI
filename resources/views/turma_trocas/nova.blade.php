@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Troca de Turma</div>
        <div class="card-body">
          <a href="{{ route('turma_trocas.index')}}" role="button"
            class="btn text-uppercase btn-primary btn-lg btn-block">Visualizar minhas trocas</a>
        </div>

        <div class="card-body">
          <form action="{{ route('turma_trocas.criar') }}" method="POST">
            @csrf
            <trocador-turmas></trocador-turmas>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
