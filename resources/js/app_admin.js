import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './admin/admin_routes';
import Vuetify from 'vuetify';

Vue.use(VueRouter);
Vue.use(Vuetify);

const files = require.context('./', true, /\.vue$/i);
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

window.eventHub = new Vue();

const app = new Vue({
    el: '#app',
    router: new VueRouter(routes)
});


