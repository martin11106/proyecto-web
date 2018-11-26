<template>

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