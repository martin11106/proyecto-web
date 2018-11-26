<template>
    <div class="row justify-content-center">
        <div class="col-md-7" style="margin-top: 7% ;">
            <div class="card"  style="border-radius: 12px 12px 12px 12px; ">
                <div class="card-body" >
                <form action="" v-on:submit.prevent="newPregunta">
                        <div class="form-group shadow-textarea">
                         <h4> Pregunta sobre tu tarea</h4>
                        <br>
                         <div >
                               <input type="text" style="border-radius: 12px 12px 12px 12px; "  class="form-control" v-model="titulo"  placeholder="titulo de pregunta">
                         </div>
                         <br>
                                <div class="form-group row" >    
                                      <textarea class="form-control border border-secondar rounded" id="exampleFormControlTextarea3" rows="7" placeholder="Escribe tu pregunta " style="border-radius: 5px 5px 5px 5px;" v-model="description"></textarea>
                                  </div>
                         </div>
                                     <select class="browser-default custom-select" style="width: 38%;border-radius: 5px 5px 5px 5px" v-model="select">
                                            <option selected>Open this select menu</option>
                                            <option v-for="materia in materias" :key="materia.id">{{materia.materia}}</option>
                                         </select>
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
                user:'',
                materias:[],
                select:''
            }
        },

        mounted() {
            axios.get('/makeQuestion').then((response) =>{
                let temp=response.data;
                this.user=temp[0];
            });
            axios.get('/materias').then((response) =>{
                let temp2=response.data;
                this.materias=temp2;
            });
        },

        methods:{
            newPregunta(){
                const params = {
                    descripcion: this.description,
                    titulo: this.titulo,
                    materia: this.select
                };
                                this.description='';
                                this.titulo='';
                                this.select='';
                axios.post('/makeQuestion', params).then((response) => {
                    const pregunta = response.data;
                });

            }
        }
    }
</script>
