/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

// window.Vue = require('vue');

import Vue from 'vue'
// import VueScrollactive from 'vue-scrollactive'
import Buefy from 'buefy'
import VueCarousel from 'vue-carousel'
import VueGallery from 'vue-gallery'

// Vue.use(VueScrollactive)
Vue.use(Buefy,{defaultIconPack: 'fas'})
Vue.use(VueCarousel)
Vue.component('vue-gallery',VueGallery)



/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

const files = require.context('./', true, /\.vue$/i);
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

// Start Turbolinks
// require('turbolinks').start()

// Boot the current Vue component
// const root = document.getElementById('app')
// window.vue = new Vue({
//     render: h => h(
//         Vue.component(root.dataset.component), {
//             props: JSON.parse(root.dataset.props)
//         }
//     )
// }).$mount(root)

document.addEventListener('turbolinks:load', (event) => {
    const root = document.getElementById('app')

    if (window.vue) {
        window.vue.$destroy(true)
    }

    window.vue = new Vue({
        render: h => h(
            Vue.component(root.dataset.component), {
                props: JSON.parse(root.dataset.props)
            }
        )
    }).$mount(root)
})

window.eventHub = new Vue()

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app'
// });

