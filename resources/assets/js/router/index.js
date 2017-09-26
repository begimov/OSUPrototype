import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

Vue.component('example', require('./../components/Example.vue'));

const routes = [
  { path: '/', component: Vue.component('example') },
]

export default new VueRouter({
  routes
})
