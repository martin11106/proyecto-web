
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('pperfil', require('./components/pruebaPerfilComponent.vue'));
Vue.component('perfil', require('./components/perfilComponent.vue'));
Vue.component('tabla', require('./components/tablaComponent.vue'));
Vue.component('menu-component', require('./components/menuComponent.vue'));
Vue.component('buscador-component', require('./components/buscadorComponent.vue'));
Vue.component('preguntas-component', require('./components/preguntasComponent.vue'));

Vue.component('hacer-component', require('./components/hacerPreguntasComponent.vue'));
Vue.component('respuesta', require('./components/respuestaComponent.vue'));
Vue.component('visualizar-pregunta', require('./components/visualizarPregunta.vue'));
Vue.component('resp', require('./components/respuesta.vue'));
const app = new Vue({
    el: '#app'
});
