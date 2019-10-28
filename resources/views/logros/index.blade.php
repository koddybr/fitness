@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Listado de logros
                    <a type="button" href="{{URL::route('logros.create')}}" class="float-right btn btn-success">Crear logro</a>
                </div>
                    <table class="table table-hover table-dark">
                    <thead>
                        <tr>
                        <th scope="col">N°</th>
                        <th scope="col">Peso Objetivo</th>
                        <th scope="col">Peso Actual</th>
                        <th scope="col">Logrado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($logros as $logro)
                            <tr>
                                <th scope="row">{{ $logro->id }}</th>
                                <td>{{ $logro->nombre }}</td>
                                <td>{{ $logro->factor }}</td>
                                <td>{{ $logro->descripcion }}</td>
                                <td>
                                    <div class="btn-group mr-2" role="group">
                                        <a type="button" href="{{asset('logros/'.$logro->id)}}" class="btn btn-secondary">V</a>
                                        <a type="button" href="{{asset('logros/'.$logro->id.'/edit')}}" class="btn btn-secondary">E</a>
                                        <a type="button" href="#" class="btn btn-secondary">X</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection