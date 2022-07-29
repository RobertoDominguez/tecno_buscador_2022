@extends('layouts.template')

@section('header')
    Gestionar Indice
@endsection

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Indice de {{$enlace->encabezado}}</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Palabra Asociada</th>
                                <th>OPCIONES</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Palabra Asociada</th>
                                <th>OPCIONES</th>
                            </tr>
                        </tfoot>
                        <tbody>

                            @foreach ($indices as $indice)
                                <tr>
                                    <td>{{ $indice->nombre }}</td>
                                    <td>

                                        <form action="{{ route('indice.destroy', [$enlace->id,$indice->id]) }}" method="POST">
                                            {{ csrf_field() }}
                                            <button class="btn btn-danger btn-icon-split">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-trash"></i>
                                                </span>
                                                <span class="text">Eliminar</span>
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>


                <a href="{{ route('indice.create',$enlace->id) }}" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">Nueva Asociacion de palabra (Indice)</span>
                </a>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection
