<template>
 <div class="row justify-content-center">
<div class="col-md-8">

            <div class="card">
                <div class="card-header"> Hola {{user.name}} realiza tu pregunta</div>
                <div class="card-body">


                    <form action="" v-on:submit.prevent="newPregunta">
                        <div class="form-group">

                            <label for="">Titulo:</label>
                            <input type="text" class="form-control" name="titulo" v-model="titulo">
                            <label for="">pregunta: </label>
                            <input type="text" class="form-control" name="pregunta" v-model="description">
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar pregunta</button>
                    </form>
                </div>
            </div>
        </div>
 </div>
</template>

<script>
    export default {
        data(){
            return{
                description:'',
                titulo:'',
                user:''
            }
        },

        mounted() {
            axios.get('/makeQuestion').then((response) =>{
                let temp=response.data;
                this.user=temp[0];
            });
        },

        methods:{
            newPregunta(){
                const params = {
                    descripcion: this.description,
                    titulo: this.titulo

                };
                                this.description='';
                                this.titulo='';
                axios.post('/makeQuestion', params).then((response) => {
                    const pregunta = response.data;
                })
.catch(response => {
  dispatch(authError(response.response.data.error));
});
            }
        }
    }
</script>
-->
