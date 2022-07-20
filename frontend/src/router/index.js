import { createRouter, createWebHashHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue';
import Connexion from '../views/ConnexionView.vue'
import Inscription from '../views/InscriptionView.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/inscription',
    name: 'inscription',
    component: Inscription
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
