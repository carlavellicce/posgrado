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
        <div class="col-md-8">
            <div class="card border-0 shadow">
                @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                    - {{ $error }} <br>
                    @endforeach    
                </div>
                @endif
                <form action="{{ route('interesteds.store') }}" class="form-horizontal" method="POST">
                    <fieldset>
                        <legend class="text-center header">Preinscripción</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-9">
                                <input name="nombre" type="text" placeholder="Nombre" class="form-control" value="{{ old('nombre') }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-9">
                                <input name="dni" type="text" placeholder="DNI" class="form-control" value="{{ old('dni') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-9">
                                <input name="titulo" type="text" placeholder="Título de grado" class="form-control" value="{{ old('titulo') }}">
                            </div>
                        </div>

                         <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-9">
                                <input name="telefono" type="text" placeholder="Teléfono" class="form-control" value="{{ old('telefono') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-9">
                                <input name="email" type="text" placeholder="Dirección de email" class="form-control" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-9">
                            <label>Carrera</label>
                                <select name="career_id" class="form-control">
                                    @foreach($careers as $career)
                                        <option value="{{ $career['id'] }}">{{ $career['nombre'] }}</option>
                                    @endforeach          
                                </select>    
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                @csrf
                                <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
    </body>
</html>
