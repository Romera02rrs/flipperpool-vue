import { createRouter, createWebHashHistory } from 'vue-router'

import HomeView from '@/modules/home/views/HomeView.vue'
//import GaleriaView from '@/modules/galeria/views/GalriaView.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/galeria',
    name: 'galeria',
    component: () => import(/* webpackChunkName: "galeria" */ '@/modules/galeria/views/GaleriaView.vue')
  },
  {
    path: '/:pathMatch(.*)*',
    name: 'noPageFound',
    component: () => import(/* webpackChunkName: "noPageFound" */ '@/views/NoPageFound.vue')
  }
]

const router = createRouter({
  history: createWebHashHistory(),
  routes
})

export default router
