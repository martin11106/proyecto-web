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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <div> 


    
<div class="container">
  <div class="row">
      <div class="col-md-7" style="margin-top: 7% ;">
          <div class="card"  style="border-radius: 12px 12px 12px 12px; ">
              <h6 style="margin-left: 30px;margin-top: 20px">Nombre <span>Materia </span></h6>
              <div class="card-body" >  
                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus, obcaecati distinctio dolorem fugiat quaerat in maxime dignissimos alias dolorum? Neque architecto dignissimos a ratione veritatis fugiat at. Cum, quibusdam nisi.</p>
          
              </div>
            </div>
            <div class="card" style="border-radius: 12px 12px 12px 12px; margin-top: 7%" >
                <h6 style="margin-left: 30px;margin-top: 20px">Respuestas</h6>
                <div  class="col-ms-11 " style="background-color:  #B4EFC2 ;border-radius: 5px 5px 5px 5px;">
                  <h5 style="margin-top: 20px;margin-left: 15px "> usuario</h5>
                      <div class="container" style="margin-top: 10px;"> 
                    <div class="form-group green-border-focus">
                        <textarea class="form-control " style="border-radius: 5px 5px 5px 5px;background-color: white " id="exampleFormControlTextarea6" rows="6"  ></textarea>
                      </div> 
                </div>
                </div><br>
              </div>
      </div>
    
    <div class="col-md-4"  style=" margin-top: 7%">
        <div class="card"  style="border-radius: 12px 12px 12px 12px; ">
            <h1 style="margin-left: 30px;margin-top: 20px ">Que quiere saber</h1>
          <button class="btn btn-danger active"> preguntar</button>
          </div>
        <div class="card"  style="border-radius: 12px 12px 12px 12px;margin-top: 5% ">
            <h6 style="margin-left: 30px;margin-top: 20px">Nombre <span>Materia </span></h6>
            <div class="card-body" >  
              <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus, obcaecati distinctio dolorem fugiat quaerat in maxime dignissimos alias dolorum? Neque architecto dignissimos a ratione veritatis fugiat at. Cum, quibusdam nisi.</p>
        
            </div>
          </div>
          </div>
      
  
  </div>
  </div>
 
@endsection