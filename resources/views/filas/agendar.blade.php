@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Agendar Coordenador</div>
        <div class="card-body">
          <form method="POST" action="{{ route('filas.criar') }}">
            @csrf
            <div class="form-row">
              <div class="form-group col">
                <label for="departamento">Departamento</label>
                <select class="form-control" id="departamento" name="departamento">
                  @foreach ($departamentos as $departamento)
                  <option value="{{ $departamento->id }}">
                    {{ $departamento->nome }}
                  </option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col">
                <label for="departamento">Motivo</label>
                <textarea class="form-control" id="motivo" name="motivo" placeholder="Ex. Risco de desligamento"></textarea>
              </div>
            </div>
            <button type="submit" class="btn btn-lg btn-success float-right">Agendar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
