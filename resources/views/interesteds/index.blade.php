<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

       
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 mx-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>DNI</th>
                            <th>Titulo</th>
                            <th>Telefono</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <body>
                        @foreach($interesteds as $interested)
                        <tr>
                            <td>{{ $interested->nombre }}</td>
                            <td>{{ $interested->dni }}</td>
                            <td>{{ $interested->titulo }}</td>
                            <td>{{ $interested->telefono }}</td>
                            <td>{{ $interested->email }}</td>
                        </tr>
                        @endforeach
                    </body>
                </table>    
                </div>
            </div>
        </div>
    </body>
</html>
