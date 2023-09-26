import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/about',
      name: 'about',
      component: () => import('../views/AboutView.vue')
    },
    {
      path: '/notes',
      name: 'notes',
      component: () => import('../views/NotesView.vue')
    },
    {
      path: '/test',
      name: 'test',
      component: () => import('../views/TestView.vue')
    },
    {
      path: '/loop',
      name: 'loop',
      component: () => import('../views/LoopView.vue')
    }
    ,
    {
      path: '/pays',
      name: 'pays',
      component: () => import('../views/PaysView.vue')
    },
    {
      path: '/fiche-pays/:id',
      name: 'fiche-pays',
      component: import('../views/FichePaysView.vue'),
      props: true
    },
  ]
})

export default router
