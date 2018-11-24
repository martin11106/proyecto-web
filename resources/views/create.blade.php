@extends('app.app')

@section('content')

<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-7" style="margin-top: 7% ;">
            <div class="card"  style="border-radius: 12px 12px 12px 12px; ">
                <div class="card-body" >
                        <div class="form-group shadow-textarea">
                         <h4> Pregunta sobre tu tarea</h4>
                                <div class="form-group row">
                                      <textarea class="form-control border border-secondar rounded" id="exampleFormControlTextarea3" rows="7" placeholder="Escribe tu pregunta " style="border-radius: 5px 5px 5px 5px;"></textarea>
                                  </div>
                         </div>
                                     <select class="browser-default custom-select" style="width: 38%;border-radius: 5px 5px 5px 5px">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                         </select>
                 </div>
                 <a class="btn btn-info active" style="width: 22%;margin-left: 5%; background-color: #57B2F8;border-radius: 5px 5px 5px 5px" > preguntar</a>

         </div>
    </div>
</div>



@endsection
