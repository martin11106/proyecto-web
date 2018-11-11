<template>
    <div>
        <div class="alert alert-danger" v-if="error && !success">
            <p>OCurrio un error.</p>
        </div>

        <div class="alert alert-success" v-if="success">
            <p>Registro completo<router-link :to="{name:'login'}">sign in.</router-link></p>
        </div>

        <form autocomplete="off" @submit.prevent="register" v-if="!success" method="post">

            <div class="form-group" v-bind:class="{ 'has-error': error && errors.name }">
                <label for="name">Correo</label>
                <input type="E-mail" id="name" class="form-control" placeholder="Ejemplo@ejemplo.com" v-model="name" required>
                <span class="help-block" v-if="error && errors.name">{{ errors.name }}</span>
            </div>

            <div class="form-group" v-bind:class="{ 'has-error': error && errors.email }">
                <label for="email">Matricula</label>
                <input type="text" id="email" class="form-control" placeholder="000000" v-model="email" required>
                <span class="help-block" v-if="error && errors.email">{{ errors.email }}</span>
            </div>

            <div class="form-group" v-bind:class="{ 'has-error': error && errors.password }">
                <label for="password">Password</label>
                <input type="password" id="password" class="form-control" v-model="password" required>
                <span class="help-block" v-if="error && errors.password">{{ errors.password }}</span>
            </div>

            <button type="submit" class="btn btn-default">Registrar</button>

        </form>
    </div>
</template>
<script> 
    export default {
        data(){
            return {
                name: '',
                email: '',
                password: '',
                error: false,
                errors: {},
                success: false
            };
        },

        methods: {
            register(){
                var app = this
                this.$auth.register({
                    data: {
                        name: app.name,
                        email: app.matricula,
                        password: app.password
                    }, 
                    success: function () {
                        app.success = true
                    },
                    error: function (resp) {
                        app.error = true;
                        app.errors = resp.response.data.errors;
                    },
                    redirect: null
                });                
            }
        }
    }
</script>