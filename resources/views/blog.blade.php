@extends('app.app')

@section('content')
<style>
.shadow-textarea textarea.form-control::placeholder {
    font-weight: 300;
}
.shadow-textarea textarea.form-control {
    padding-left: 0.8rem;
}
</style>
<div class="card" style="width: 630px;height: 200px; margin-left: 350px;margin-top: 50px;border-radius: 12px 12px 12px 12px;" >
    <h6 style="margin-left: 30px;margin-top: 20px">Nombre <span>Materia </span></h6>
    <div class="card-body" >
      <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus, obcaecati distinctio dolorem fugiat quaerat in maxime dignissimos alias dolorum? Neque architecto dignissimos a ratione veritatis fugiat at. Cum, quibusdam nisi.</p>

    </div>
  </div>

  <div class="card" style="width: 630px;height: 304px; margin-left: 350px;margin-top: 50px;border-radius: 12px 12px 12px 12px; " >
    <h6 style="margin-left: 30px;margin-top: 20px">Respuestas</h6>
    <div  style="background-color:  #B4EFC2 ;width: 600px;height: 220px;margin-left: 15px;border-radius: 5px 5px 5px 5px;">
      <h5 style="margin-top: 20px;margin-left: 15px "> usuario</h5>
          <div class="container" style="margin-top: 10px;margin-left: -5px"> 
        <div class="form-group shadow-textarea">
            <textarea class="" style="border-radius: 5px 5px 5px 5px; " id="exampleFormControlTextarea6" rows="6" cols="80" placeholder="Write something here..."></textarea>
          </div> 
    </div>
    </div>

   
  </div>
   

@endsection