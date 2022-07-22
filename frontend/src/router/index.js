import { createRouter, createWebHashHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import InscrireenfantView from '../views/InscrireenfantView.vue'
import UtilisateursView from '../views/UtilisateursView.vue'
import MessagerieView from '../views/MessagerieView.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/about',
    name: 'about',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/AboutView.vue')
  },
  {
    path: '/user',
    name: 'user',
    component: UtilisateursView
  },
  {
    path: '/child',
    name: 'child',
    component: InscrireenfantView
  },
  {
    path: '/msg',
    name: 'msg',
    component: MessagerieView
  }
]

const router = createRouter({
  history: createWebHashHistory(),
  routes
})

export default router
