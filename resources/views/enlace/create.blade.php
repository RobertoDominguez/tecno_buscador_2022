@extends('layouts.template')

@section('header')
    Crear nuevo Enlace
@endsection

@section('content')



    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">

                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Crear Enlace</h1>
                            </div>

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form class="user" action="{{ route('enlace.store') }}" method="POST"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}


                                <div class="form-group">
                                    <input type="text" name="encabezado" class="form-control form-control"
                                        id="exampleInput" placeholder="Encabezado" required>
                                </div>

                                <br>
                                <div class="form-group">
                                    <input type="text" name="url" class="form-control form-control" id="exampleInput"
                                        placeholder="URL" required>
                                </div>
                                <br>
                                <input type="submit" class="btn btn-primary btn-user btn-block" value="Aceptar">

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
