require('./bootstrap');

window.Vue = require('vue');

Vue.component('invoice-form', require('./components/InvoiceForm.vue'));

const app = new Vue({
    el: '#app'
});
