@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Fila de Atendimento</div>
        @if (session('message'))
        <div class="card-body">
          <div class="alert alert-success h4" role="alert">
            <strong>{{ session('message') }}</strong>
          </div>
        </div>
        @endif
        <div class="card-body">
          @foreach ($departamentos as $departamento)
          <div>
            <h3 class="mb-3">{{$departamento->nome}}</h3>
            <table class="table table-hover">
              <thead class="thead-light">
                <tr>
                  <th scope="col">Posição</th>
                  <th scope="col">Aluno</th>
                  <th scope="col">Curso</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($departamento->filas as $posicao=>$fila)
                <tr>
                  <th scope="row">{{$posicao+1}}</th>
                  <td class="{{$fila->user->name == Auth::user()->name ? 'font-weight-bold' : ''}}">
                    {{ $fila->user->name }}
                  </td>
                  <td>{{ Str::title($fila->user->curso->nome) }}</td>
                </tr>
                @endforeach
            </table>
            <hr>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
