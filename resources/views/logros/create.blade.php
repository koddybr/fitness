@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registrar Nuevo Logro</div>

                <div class="card-body">
                    <form method="POST" action="{{ asset('actividades') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">
                                Peso Objetivo
                            </label>
                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="factor" class="col-md-4 col-form-label text-md-right">
                                Peso Actual
                            </label>
                            <div class="col-md-6">
                                <input id="factor" type="text" class="form-control" name="factor" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">
                                Logrado
                            </label>
                            <div class="cool-md-6">
                                <input id="logrado" type="checkbox" class="form-control" name="nombre" required>
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