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
              <div class="form-group col-md-6">
                <label for="departamento">Departamento</label>
                <select class="form-control" id="departamento" name="departamento">
                  @foreach ($departamentos as $departamento)
                  <option value="{{ $departamento->id }}">
                    {{ $departamento->nome }}
                  </option>
                  @endforeach
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="curso">Seu curso</label>
                <select class="form-control" id="curso" name="curso">
                  @foreach ($cursos as $curso)
                  <option value="{{ $curso->id }}">
                    {{ Str::title($curso->nome)." - $curso->turno" }}
                  </option>
                  @endforeach
                </select>
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
