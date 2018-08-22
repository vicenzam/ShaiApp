<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" >

        <title>Ingresos y Egresos</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
    </head>
    <body>
        <div class="container">
            <div class="row" id="app">
                <div class="col-sm-7">
                    <h1>listado de ingresos</h1>
                    <tableincomes></tableincomes>
                </div>
                <div class="col-sm-5">
                    <h2>formulario de Ingresos</h2>
                </div>
            </div>
        </div>
        
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>