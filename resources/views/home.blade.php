@extends('layouts.app')

@section('content')
<div class="container">
    <a href="/logout" class="btn btn-danger">Cerrar Sesion</a>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bienvenido {{$user->nombre}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
