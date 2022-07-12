import { createRouter, createWebHashHistory } from 'vue-router'
import AccueilView from '../views/AccueilView.vue'
import ConnexionView from '../views/ConnexionView.vue'
import InscriptionView from '../views/InscriptionView.vue'
import UtilisateurView from '../views/UtilisateurView.vue'
import InscriptionEnfantView from '../views/UtilisateurView.vue'
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
    path: '/utilisateur',
    name: 'utilisateur',
    component: UtilisateurView
  },
  {
    path: '/inscriptionenfant',
    name: 'inscriptionenfant',
    component: InscriptionEnfantView
  }
]
const router = createRouter({
  history: createWebHashHistory(),
  routes
})

export default router
