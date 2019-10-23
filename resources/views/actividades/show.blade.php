@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Actividad</div>

                <div class="card-body">
                    <form method="POST" action="{{ asset('actividades/'.$actividad->id.'/edit') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">
                                Nombre
                            </label>
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">
                                {{ $actividad->nombre }}
                            </label>
                        </div>
                        <div class="form-group row">
                            <label for="factor" class="col-md-4 col-form-label text-md-right">
                                Factor
                            </label>
                            <label for="factor" class="col-md-4 col-form-label text-md-right">
                                {{ $actividad->factor }}
                            </label>
                        </div>
                        <div class="form-group row">
                            <label for="descripcion" class="col-md-4 col-form-label text-md-right">
                                Descripción
                            </label>
                            <label for="descripcion" class="col-md-4 col-form-label text-md-right">
                            {{ $actividad->descripcion }}
                            </label>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a type="button" href="{{asset('actividades')}}" class="btn btn-secondary">Volver al listado</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection