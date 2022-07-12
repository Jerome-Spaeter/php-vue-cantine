import { createRouter, createWebHashHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue';
import Connexion from '../views/ConnexionView.vue'
import About from '../views/AboutView.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/about',
    name: 'about',
    component: About
  },
  {
    path: '/connexion',
    name: 'connexion',
    component: Connexion
  }
]

const router = createRouter({
  history: createWebHashHistory(),
  routes
})

export default router
