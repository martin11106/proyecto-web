@extends('app.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
                <div class="card  col-sm-6 col-md-4" style="border-radius: 12px 12px 12px 12px; margin-top: 7%" >
                   <br>
                    <h4 class="text-center"> iniciar sesion</h4>
                    <div class="row">
                            <input type="email" class="form-control border border-secondar " style="border-radius: 10px 10px 10px 10px; border-color: #F1F4F7;margin-left: 22%;width: 150%" id="">
                    </div>
                    <div class="row">
                            <input type="email" class="form-control border border-secondar " style="border-radius: 10px 10px 10px 10px; border-color: #F1F4F7;margin-left: 22%;width: 150%" id="">
                    </div>
                    <br>
                    <a class="text-center" href="#">¿olvide mi contraseña?</a>
                    <br>
                    <a class="btn btn-info active" style="width: 40%;margin-left: 30%; background-color: #57B2F8;border-radius: 5px 5px 5px 5px" > iniciar sesion</a>
                    <br>
                    <h6>No tengo mi cuenta todavía, quiero <a href="#">registrarme</a></h6>
                </div>
        </div>

    </div>
@endsection