@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-4 col-sm-offset-6">
            <form action="/saveuser" method="post">
                {{ csrf_field() }}
                <legend>Registro</legend>
                <fieldset>
                    <label for="nombre">Nombre:</label>
                    <input class="form-control" type="text" name="nombre"><br>
            
                    <label for="apellido_paterno">Apellido Paterno:</label>
                    <input class="form-control" type="text" name="apellido_paterno"><br>
            
                    <label for="apellido_materno">Apellido Materno:</label>
                    <input class="form-control" type="text" name="apellido_materno"><br>
            
                    <label for="matricula">Matricula:</label>
                    <input class="form-control" type="text" name="matricula"><br>
            
                    <label for="telefono">Telefono:</label>
                    <input class="form-control" type="text" name="telefono"><br>
            
                    <label for="email">Correo:</label>
                    <input class="form-control" type="email" name="email"><br>
            
                    <label for="password">Contraseña:</label>
                    <input class="form-control" type="password" name="password"><br>
            
                    <input type="radio" name="genero" value="Masculino" checked>Masculino
                    <input type="radio" name="genero" value="Femenino">Femenino
            
                </fieldset>
            
                <button class="btn btn-primary btn-block">Registrar</button>
            </form>
        </div>
    </div>
</div>
@endsection