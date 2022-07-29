@extends('layouts.template')

@section('header')
    Gestionar Enlace
@endsection

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Enlaces</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Encabezado</th>
                                <th>URL</th>
                                <th>OPCIONES</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Encabezado</th>
                                <th>URL</th>
                                <th>OPCIONES</th>
                            </tr>
                        </tfoot>
                        <tbody>

                            @foreach ($enlaces as $enlace)
                                <tr>
                                    <td>{{ $enlace->encabezado }}</td>
                                    <td>{{ $enlace->url }}</td>
                                    <td>
                                        <a href="{{ route('enlace.edit', $enlace->id) }}"
                                            class="btn btn-warning btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-arrow-right"></i>
                                            </span>
                                            <span class="text">Editar</span>
                                        </a>

                                        <a href="{{ route('indice.index', $enlace->id) }}"
                                            class="btn btn-primary btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-arrow-right"></i>
                                            </span>
                                            <span class="text">Asociar Palabras (Indice)</span>
                                        </a>

                                        <form action="{{ route('enlace.destroy', $enlace->id) }}" method="POST">
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


                <a href="{{ route('enlace.create') }}" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                    <span class="text">Nuevo Enlace</span>
                </a>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

@endsection
