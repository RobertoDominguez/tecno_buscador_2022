@extends('layouts.template')

@section('header')
    Reportes Y Estadisticas
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Palabra mas buscada</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" ><strong>{{$reportes['palabra_mas_buscada']->nombre}}</strong></a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Cantidad de busquedas realizadas</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" ><strong>{{'  '.$reportes['cantidad_de_busquedas'].' Busquedas Globales'}} </strong></a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Palabra menos buscada</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" ><strong>{{$reportes['palabra_menos_buscada']->nombre}}</strong></a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">Cantidad de palabras registradas</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" ><strong>{{$reportes['cantidad_palabras_registradas']}}</strong></a>
                </div>
            </div>
        </div>
    </div>
@endsection
