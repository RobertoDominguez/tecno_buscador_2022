@extends('layouts.template')

@section('header')
    Editar Usuario
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
                                <h1 class="h4 text-gray-900 mb-4">Editar Usuario</h1>
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

                            <form class="user" action="{{ route('user.update', $user->id) }}" method="POST"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}


                                <div class="form-group">
                                    <input type="text" name="name" class="form-control form-control" id="exampleInput"
                                        placeholder="Nombre" value="{{ $user->name }}" required>
                                </div>

                                <br>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control" id="exampleInput"
                                        placeholder="Correo electronico" value="{{ $user->email }}" required>
                                </div>
                                <br>

                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control"
                                        id="exampleInput" placeholder="Contraseña" required>
                                </div>
                                <br>

                                <div class="form-group">
                                    <select class="form-select" name="rol" aria-label="Default select example">
                                        {{-- <option selected>Selecciona la apunte del apunte</option> --}}
                                        @if ($user->rol == 1)
                                            <option value="1" selected>Administrador</option>
                                            <option value="2">Escritor</option>
                                        @else
                                            <option value="1">Administrador</option>
                                            <option value="2" selected>Escritor</option>
                                        @endif


                                    </select>
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
