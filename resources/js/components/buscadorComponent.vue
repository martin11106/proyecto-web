
<template>

<section id="cover">
    <div id="Cover-text">
        <div class="container">
            <div class="row " style="width: 1300px;height: 250px; " >
                <div class="col-sm-12 " >
                    <h1 class="display-3 "> has tus preguntas</h1>
                    <p> respondemos en menos de 5 minutos</p>
                  
                    <form action="" class="form-inline justify-content-center text-center">
                        <div class="form-group">
                                <label class="sr-only">Pregunta</label>
                        <form class="form-inline">
  <i class="fa fa-search" aria-hidden="true"></i>
  <input class="form-control form-control " style="background-color:white;border-radius: 5px 5px 5px 5px;width:500px;height:40px" type="text" placeholder="Search" aria-label="Search">
</form>

                            <button type="submit" class="btn btn-success btn-lg active" style="margin-top:-10px"> buscar</button>
                        
                        </div>
                      
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
