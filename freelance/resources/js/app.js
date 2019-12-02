/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.$ = window.jQuery = require('jquery'); 

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('dashboard', require('./components/dashboard.vue').default);
Vue.component('usuarios', require('./components/Usuarios/usuarios.vue').default);
Vue.component('addusuario', require('./components/Usuarios/agregarUsuario.vue').default);
Vue.component('updateUsuario', require('./components/Usuarios/actualizarUsuario.vue').default);

Vue.component('misproyectos', require('./components/myproyectos/myProjects.vue').default);
Vue.component('tablero', require('./components/myproyectos/dashProyectos.vue').default);


Vue.component('metodo_retiro', require('./components/pagos/Metodosretiro.vue').default);
Vue.component('log_retiro', require('./components/pagos/LogRetiro.vue').default);
Vue.component('solicitudes_retiro', require('./components/pagos/SolicitudesRetiro.vue').default);

Vue.component('metodos_pago', require('./components/MetodosPago.vue').default);
Vue.component('log_pagos', require('./components/LogPagos.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#wrapper',
    data: {
        menu:0
    }
});
