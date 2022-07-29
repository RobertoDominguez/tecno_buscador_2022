<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado de la busqueda</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>

    <br>
    <form action="{{ route('buscar') }}">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-sm-1">
            </div>
            <div class="col-sm-1">
                <a href="{{ route('buscador') }}">
                    <img src="{{ asset('logo.png') }}" class="img-fluid">
                </a>
            </div>
            <div class="col-sm-5 my-auto">
                <input type="text" class="form-control form-input" placeholder="Buscar..." name="nombre" required>
            </div>
            <div class="col-sm-2 my-auto">
                <button type="submit" name="action" value="simple" class="form-control form-input">Busqueda simple</button>
            </div>
            <div class="col-sm-2 my-auto">
                <button type="submit" name="action" value="avanzada" class="form-control form-input">Busqueda Avanzada</button>
            </div>
            <div class="col-sm- my-auto">
            </div>
        </div>
    </form>


    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>

            @foreach ($resultados as $resultado)
                <tr>
                    <th></th>
                    <th>
                        <div class="col">
                            <div class="row">
                                <strong style="color: blue">
                                    <h2>
                                        <a href="{{ $resultado->url }}" class="text-decoration-none"
                                            target="_blank">{{ $resultado->encabezado }}</a>
                                    </h2>
                                </strong>
                            </div>
                            <div class="row">
                                <a>{{ $resultado->url }}</a>
                            </div>
                        </div>

                    </th>
                </tr>
            @endforeach

        </tbody>
    </table>
</body>

</html>
