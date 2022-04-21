import { createRouter, createWebHashHistory } from 'vue-router'

import HomeView from '@/modules/home/views/HomeView.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/empresa',
    name: 'empresa',
    component: () => import(/* webpackChunkName: "empresa" */ '@/views/EmpresaView.vue')
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
