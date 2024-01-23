import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/employed',
    name: 'employed',
    component: () => import('../views/Employed.vue')
  },
  {
    path: '/Dashbord',
    name: 'dashbord',
    component: () => import('../views/Dashbord.vue')
  },
  {
    path: '/SignIn',
    name: 'SignIn',
    component: () => import('../views/SignIn.vue')
  },
  {
    path: '/add',
    name: 'add',
    component: () => import('../views/add.vue')
  }
  
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
