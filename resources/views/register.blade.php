@extends('app.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="card  col-sm-6 col-md-4" style="border-radius: 12px 12px 12px 12px; margin-top: 7%" >
              <form method="POST" action="{{route('login')}}" class="text-center" >
                    <br> 
                <h4 class="text-center">    Regístrate</h4>
               
                <div class="row top "  >
                        <input  placeholder="nombre"  name="nombre"  class="form-control border border-secondar" style="border-radius: 10px 10px 10px 10px; border-color: #F1F4F7;margin-left: 22%;width: 150%" id="">
                    </div>
              
                    <div class="row top " >
                        <input type="text" name="apellidoP"  placeholder="apellido Paterno" class="form-control border border-secondar " style="border-radius: 10px 10px 10px 10px; border-color: #F1F4F7;margin-left: 22%;width: 150%" id="">
                    </div>
                <br>
                <div class="row "  >
                    <input type="text" name="apellidoM"  placeholder="apellido Materno" class="form-control border border-secondar " style="border-radius: 10px 10px 10px 10px; border-color: #F1F4F7;margin-left: 22%;width: 150%" id="">
                </div>
                <div class="row top "  >
                    <input type="email" name="email"  placeholder="ingresa tu email" class="form-control border border-secondar " style="border-radius: 10px 10px 10px 10px; border-color: #F1F4F7;margin-left: 22%;width: 150%" id="">
                </div>
                <div class="row top "  >
                    <input type="password" name="password"  placeholder="ingresa tu password" class="form-control border border-secondar " style="border-radius: 10px 10px 10px 10px; border-color: #F1F4F7;margin-left: 22%;width: 150%" id="">
                </div>
                <div class="row top "  >
                    <input type="password" name="password"  placeholder="repita su password" class="form-control border border-secondar " style="border-radius: 10px 10px 10px 10px; border-color: #F1F4F7;margin-left: 22%;width: 150%" id="">
                </div>
                <div>
                        <a class="text-center" href="#">¿olvide mi contraseña?</a>
                </div>   
                <br>
            <div>
                    <button class="btn btn-info active" style="width: 40%; background-color: #57B2F8;border-radius: 5px 5px 5px 5px" > iniciar sesion</button>

            </div>
                <br>
           

              </form>
               
            </div>
    </div>

</div>
@endsection