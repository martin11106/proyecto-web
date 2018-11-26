@extends('app.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
                <div class="card  col-sm-6 col-md-4" style="border-radius: 12px 12px 12px 12px; margin-top: 7%" >
                  <form method="POST" action="{{route('login')}}" class="text-center">
                        <br> 
                {{ csrf_field() }}
                    <h4 class="text-center">    iniciar sesion</h4>
                    <br>
                    <div class="row top {{ $errors->has('email') ? 'has-error' : ''}}">
                            <input  placeholder="Ingresa tu email"  name="email"  class="form-control border border-secondar" style="border-radius: 10px 10px 10px 10px; border-color: #F1F4F7;margin-left: 22%;width: 150%" id="">
                            {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                        </div>
                        <br>
                    <div class="row top {{ $errors->has('password') ? 'has-error' : ''}}">
                            <input type="password" name="password"  placeholder="Ingresa tu password" class="form-control border border-secondar " style="border-radius: 10px 10px 10px 10px; border-color: #F1F4F7;margin-left: 22%;width: 150%" id="">
                            {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                        </div>
                    <br>
                    <div>
                            <a class="text-center" href="#">¿olvide mi contraseña?</a>
                    </div>   
                    <br>
                <div>
                        <button class="btn btn-info active" style="width: 40%; background-color: #57B2F8;border-radius: 5px 5px 5px 5px" > iniciar sesion</button>

                </div>
                    <br>
                    <h6>No tengo mi cuenta todavía, quiero <a href="#">registrarme</a></h6>

                  </form>
                   
                </div>
        </div>

    </div>
@endsection