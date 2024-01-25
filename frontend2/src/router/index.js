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
    path: '/Group',
    name: 'Group',
    component: () => import('../views/Group.vue')
  },
  {
    path: '/Post',
    name: 'Post',
    component: () => import('../views/Post.vue')
  }
  
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
