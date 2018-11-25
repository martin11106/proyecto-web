<template>
<div class="container">
  <div class="row">
      <div class="col-md-7" style="margin-top: 7% ;">
          <div class="card"  style="border-radius: 12px 12px 12px 12px; ">
              <h6 style="margin-left: 30px;margin-top: 20px">Nombre <span>Materia </span></h6>
              <div class="card-body" >  
                <p class="card-text">pregunta</p>
          
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
          <a class="btn btn-danger active" data-toggle="modal" data-target="#create" data-whatever="@mdo"> preguntar</a>
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
</template>

<script>
export default {
    created: function(){
        this.getDatas();
    },
    data(){
            return{
                datas:[],
            };
        },
    methods:{
            getDatas: function(){
                
                axios.get('/user/').then(response => {
                    this.datas = response.data
    });
            }
           
            }
    
    
}
</script>