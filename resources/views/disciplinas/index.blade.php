@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Buscador de Disciplinas</div>
                <div class="card-body">
                    <form method="GET" action="{{ route('disciplinas.buscar') }}">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="departamento">Departamento</label>
                                <select class="form-control" id="departamento" name="departamento">
                                    @foreach ($departamentos as $departamento)
                                    <option value="{{ $departamento->id }}">
                                      {{ $departamento->nome }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="disciplina">Nome da Disciplina</label>
                                <input type="text" class="form-control" id="disciplina" name="disciplina" placeholder="Ex. Metodos">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Opções adicionais</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="vagas" name="vagas">
                                    <label class="form-check-label" for="vagas" name="vagas">
                                        Com vagas?
                                    </label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-lg btn-success float-right">Buscar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
