

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router'
Vue.use(VueRouter)

import routes from './routes'

const router = new VueRouter({
    mode: "history",
    routes : routes   // OR only routes 
})

const app = new Vue({
    el: '#app',
    router
});