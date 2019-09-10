import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './admin_routes';
import store from './admin_store';
import Vuetify from 'vuetify';
import Vuex from 'vuex';import vue2Dropzone from 'vue2-dropzone'


Vue.use(VueRouter);
Vue.component('vue2-dropzone', vue2Dropzone);
Vue.use(Vuex);
Vue.use(Vuetify, {
    theme: {
    primary: '#d10f22',
  }
});

const files = require.context('./', true, /\.vue$/i);
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

window.moment = require('moment')
window.eventHub = new Vue();

const app = new Vue({
    el: '#app',
    store: store,
    router: new VueRouter(routes)
});


