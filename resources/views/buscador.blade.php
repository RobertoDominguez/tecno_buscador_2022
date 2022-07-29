<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {

            background: #ffffff;
        }

        .height {

            height: 100vh;
        }

        .form {

            position: relative;
        }

        .form .fa-search {

            position: absolute;
            top: 20px;
            left: 20px;
            color: #9ca3af;

        }

        .form span {

            position: absolute;
            right: 17px;
            top: 13px;
            padding: 2px;
            border-left: 1px solid #d1d5db;

        }

        .left-pan {
            padding-left: 7px;
        }

        .left-pan i {

            padding-left: 10px;
        }

        .form-input {

            height: 55px;
            text-indent: 33px;
            border-radius: 10px;
        }

        .form-input:focus {

            box-shadow: none;
            border: none;
        }
    </style>

</head>

<body>




    <form action="{{ route('buscar') }}">
        {{ csrf_field() }}

        <div class="container">

            <div class="row height d-flex justify-content-center align-items-center">

                <div class="col-md-6">

                    <center>

                        <img src="{{ asset('logo.png') }}" class="img-fluid">
                    </center>
                    <br><br>
                    <div class="form">
                        <i class="fa fa-search"></i>
                        <input type="text" class="form-control form-input" placeholder="Buscar..." name="nombre" required>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm">
                            <button type="submit" name="action" value="simple" class="form-control form-input">Busqueda simple</button>
                        </div>

                        <div class="col">
                            <button type="submit" name="action" value="avanzada" class="form-control form-input">Busqueda Avanzada</button>
                        </div>
                    </div>
                </div>

            </div>



        </div>

    </form>


</body>

</html>
