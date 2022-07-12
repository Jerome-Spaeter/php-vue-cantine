import { createRouter, createWebHashHistory } from 'vue-router'
import AccueilView from '../views/AccueilView.vue'
import ConnexionView from '../views/ConnexionView.vue'
import InscriptionView from '../views/InscriptionView.vue'
import MessagerieView from '../views/MessagerieView.vue'
import PaiementView from '../views/PaiementView.vue'
const routes = [
  {
    path: '/',
    name: 'accueil',
    component: AccueilView
  },
  {
    path: '/connexion',
    name: 'connexion',
    component: ConnexionView
  },
  {
    path: '/inscription',
    name: 'inscription',
    component: InscriptionView
  },
  {
    path: '/messagerie',
    name: 'messagerie',
    component: MessagerieView
  },
  {
    path: '/paiement',
    name: 'paiement',
    component: PaiementView
  }
]
const router = createRouter({
  history: createWebHashHistory(),
  routes
})

export default router
