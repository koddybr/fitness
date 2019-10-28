@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registrar Nueva Recomendacion</div>

                <div class="card-body">
                    <form method="POST" action="{{ asset('actividades') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="alimentos" class="col-md-4 col-form-label text-md-right">
                                Productos
                            </label>
                            <div class="col-md-6">
                                <select class="form-control" id="alimentos_id" name="alimentos_id">
                                    @foreach($alimentos as $alimento)
                                        <option value="{{ $alimento->id }}">{{ $alimento->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="factor" class="col-md-4 col-form-label text-md-right">
                                Calorias
                            </label>
                            <div class="col-md-6">
                                <input id="factor" type="text" class="form-control" name="factor" required>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Guardar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection