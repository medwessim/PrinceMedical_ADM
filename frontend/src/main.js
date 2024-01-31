import { createApp } from 'vue'
import App from './App.vue'
import "./echo"
import router from './router'
import store from './store'
import './assets/style.css'
import { createPinia } from 'pinia'
import { createHead } from '@vueuse/head'
const head = createHead()
const pinia = createPinia()
createApp(App).use(head).use(pinia).use(store).use(router).mount('#app')
