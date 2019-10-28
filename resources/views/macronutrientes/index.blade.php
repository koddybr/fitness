@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Listado de Macronutrientes
                    <a type="button" href="{{URL::route('macronutrientes.create')}}" class="float-right btn btn-success">Crear macronutriente</a>
                </div>
                    <table class="table table-hover table-dark">
                    <thead>
                        <tr>
                        <th scope="col">N°</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Peso Neto</th>
                        <th scope="col">calorias</th>
                        <th scope="col">Proteinas</th>
                        <th scope="col">Carbohidratos</th>
                        <th scope="col">Grasas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($macronutrientes as $macronutriente)
                            <tr>
                                <th scope="row">{{ $macronutriente->id }}</th>
                                <td>{{ $macronutriente->nombre }}</td>
                                <td>{{ $macronutriente->peso }}</td>
                                <td>{{ $macronutriente->calorias }}</td>
                                <td>{{ $macronutriente->proteinas }}</td>
                                <td>{{ $macronutriente->carbohidratos }}</td>
                                <td>{{ $macronutriente->grasas }}</td>
                                <td>
                                    <div class="btn-group mr-2" role="group">
                                        <a type="button" href="{{asset('macronutrientes/'.$macronutriente->id)}}" class="btn btn-secondary">V</a>
                                        <a type="button" href="{{asset('macronutrientes/'.$macronutriente->id.'/edit')}}" class="btn btn-secondary">E</a>
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