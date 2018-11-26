<template>
    <div id="" class="row">
    
    <div class="col-sm-7">
        
            <table style="width:100%" border=1 class="table table-hover">
			<thead class="thead-dark">
				<tr>
					<th scope="col" style="width:100px">Nombre de usuario</th>
					<th scope="col">Matricula</th>
					<th scope="col">Puntos</th>				                                      

				</tr>
            </thead>
                <tbody >
                    <tr v-for="data in datas" :key="data.id">
                        <td style="width:100px">{{ data.nombre+' '+ data.apellido_paterno +" "+ data.apellido_materno }}</td>
                        <td  style="width:60px"> {{ data.matricula }} </td>   
                        <td  style="width:60px"> {{ data.puntos }} </td>
                        
                    </tr>
                </tbody>
            </table>
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