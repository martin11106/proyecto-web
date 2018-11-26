<template>


    <div class="container ">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img id="" class="" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" style="position:absolute;
        left:30%;
        width:150px;
        height:150px;
        border-radius:150px;
        border:6px solid #666;" /> <br>
                            </div>
                    </div>
                    <div class="col-md-6">
                        <div  class="" >
                            
                            <h2>¡Bienvenido Edd !</h2>
                                    <h6>
                                       Tipo de usuario: Estudiante
                                    </h6>
                                    <p class="proile-rating">Puntos <span>100</span></p>
                            <ul class="nav nav-tabs" id="" role="tablist">
                                <h2 class="card-title">Datos personales:</h2>
                                
                            </ul>
                        </div>
                        
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="btn btn-primary" name="" value="Editar perfil"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card"> <br>
                            <center><p>Descripción</p></center>
                           
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos atque, eligendi impedit culpa quis animi quaerat omnis dolorem illum iusto, ipsa nemo porro corporis laborum asperiores facere tempora quasi iste?</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Matrícula: </label>
                                            </div>
                                            <div class="col-md-4">
                                                <p>123</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Nombre completo</label>
                                            </div>
                                            <div class="col-md-5">
                                                <p>Edddddddddddddd</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-5">
                                                <p>Eddd@ed.com</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Telefono</label>
                                            </div>
                                            <div class="col-md-5">
                                                <p>1234</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <label>Carrera</label>
                                            </div>
                                            <div class="col-md-5">
                                                <p>I D S</p>
                                            </div>
                                        </div>
                                        
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
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
                
                axios.get('/user/1').then(response => {
                    this.datas = response.data
    });
            }
           
            }
    
    
}
</script>
