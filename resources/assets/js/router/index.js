import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

Vue.component('search-panel', require('./../components/SearchPanel.vue'));
Vue.component('map-panel', require('./../components/MapPanel.vue'));

const routes = [
  { path: '/', component: Vue.component('search-panel') },
  { path: '/map', component: Vue.component('map-panel') },
]

export default new VueRouter({
  routes
})
