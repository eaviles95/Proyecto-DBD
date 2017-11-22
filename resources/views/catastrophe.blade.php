<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movidosxchile</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
       

<body>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registrar Catastrofe</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/catastrophe') }}">
                    <div>
                        <h3> Datos generales </h3>
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                        
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description" class="col-md-4 control-label">Descripcion</label>
                            <textarea class="form-control" rows="3" id="description"></textarea>
                        </div>

                        <div class = "form-group cold-md-4">
                              <label for="sel1">Tipo de catastrofe:</label>
                              <select class="form-control" id="type">
                                <option>Movimiento sismico</option>
                                <option>Tsunami</option>
                                <option>Fenómeno Atmosferico</option>
                                <option>Incendio forestal</option>
                                <option>Incendio local</option>
                                <option>Terremoto</option>
                                <option>Inundación</option>
                                <option>Erupción</option>
                                <option>Hambruna</option>
                                <option>Atentado terrorista</option>
                                <option>Ninguna de las anteriores</option>
                              </select>

                               <div class="form-group">
                                <label for="disabledInput" class="col-sm-2 control-label">Otro:</label>
                                <div class="col-sm-6">
                                  <input class="form-control" id="disabledInput" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3> Lugar del suceso </h3>

                        <div class = "form-group cold-md-4">
                              <label for="sel1">Region:</label>
                              <select class="form-control" id="type">
                                <option></option>
                            </select>
                        </div>
                        <div class = "form-group cold-md-4">
                              <label for="sel1">Provincia:</label>
                              <select class="form-control" id="type">
                                <option></option>
                            </select>
                        </div>
                        <div class = "form-group cold-md-4">
                              <label for="sel1">Comuna:</label>
                              <select class="form-control" id="type">
                                <option></option>
                            </select>
                        </div>
                    </div>
                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Ingresar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</head>
</html>
