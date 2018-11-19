<template>


<div class="container">
                <div class="form_top">
                    <h2>FORMULARIO <span class="label label-default">New</span>
                    </h2>
                </div>
                
                    <form class="" action="">
                        <label class="label-default" for="Name">Nombre: </label> <br>
                        <input class="input" type="text" placeholder="Ingrese nombre" required autofocus> <br>
                        <label class="" for="email">Email: </label><br>
                        <input class="input" type="email" placeholder=" Ingrese mail" required><br>
                        <Label class="">Genero: </Label><br>
                        <input  type="radio" name="gender" value="Mujer"> Mujer
                        <input type="radio" name="gender" value="Hombre"> Hombre
                        <br><label class="">Biografia: </label> <br>
                        <textarea class="textarea" type="textarea" placeholder="Ingrese Biografia" required></textarea> <br>
                        <LAbel class="">Ciudad : </LAbel> 

                        <select>
                                <option value="valor1">Tuxtla</option>
                                <option value="valor2">Sancris</option>
                                <option value="valor3">Suchiapa</option>
                        </select>

                        <div class="btn_form">
                                <input class="btn_submit" type="submit" value="Guardar">
                                <input class="btn_reset" type="reset" value="Limpiar">
                        </div>

                    </form>
        </div>


</template>

<script>
export default {
    
}
</script>
