@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registrar Estado Físico</div>

                <div class="card-body">
                    <form method="POST" action="{{ asset('actividades') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="usuario" class="col-md-4 col-form-label text-md-right">
                                Usuario
                            </label>
                            <div class="col-md-6">
                                <select class="form-control" id="usuario_id" name="usuario_id">
                                    @foreach($usuarios as $usuario)
                                        <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="peso" class="col-md-4 col-form-label text-md-right">
                                Peso
                            </label>
                            <div class="col-md-6">
                                <input id="peso" type="text" class="form-control" name="peso" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="factor" class="col-md-4 col-form-label text-md-right">
                                Estatura
                            </label>
                            <div class="col-md-6">
                                <input id="factor" type="text" class="form-control" name="factor" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="descripcion" class="col-md-4 col-form-label text-md-right">
                                Genero
                            </label>
                            <div class="col-md-6">
                                <input id="descripcion" type="text" class="form-control" name="descripcion">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="descripcion" class="col-md-4 col-form-label text-md-right">
                                Edad
                            </label>
                            <div class="col-md-6">
                                <input id="descripcion" type="text" class="form-control" name="descripcion">
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