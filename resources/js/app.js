/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('register-component', require('./components/auth/RegisterComponent.vue').default);
Vue.component('register-user-component', require('./components/auth/RegisterUserComponent.vue').default);
Vue.component('login-component', require('./components/auth/LoginComponent.vue').default);
Vue.component('setpin-component', require('./components/dashboard/SetpinComponent.vue').default);
Vue.component('transfer-component', require('./components/dashboard/TransferComponent.vue').default);
Vue.component('buydata-component', require('./components/dashboard/BuydataComponent.vue').default);
Vue.component('buyairtime-component', require('./components/dashboard/BuyairtimeComponent.vue').default);
Vue.component('electricity-component', require('./components/dashboard/ElectricityComponent.vue').default);
Vue.component('examination-component', require('./components/dashboard/ExaminationComponent.vue').default);
Vue.component('cable-component', require('./components/dashboard/CableComponent.vue').default);
Vue.component('my-analysis', require('./components/dashboard/MyAnalysis.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
