
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
                            <input type="text" class="form-control form-control-lg" placeholder="preunta">
                            <button type="submit" class="btn btn-success btn-lg"> buscar</button>
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
