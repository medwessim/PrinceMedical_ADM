import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import './assets/style.css'
import { createPinia } from 'pinia'
import Echo from "laravel-echo"
window.Pusher = require('pusher-js');


window.Echo = new Echo({
    broadcaster: 'pusher',
    // key: process.env.VUE_APP_WEBSOCKETS_KEY,
    // wsHost:process.env.VUE_APP_WEBSOCKETS_SERVER,
    key: "local",
    wsHost:"127.0.0.1",
    wsPort: 6001,
    cluster: "mt1",
    forceTLS: false,
    disableStats: true,
});
const pinia = createPinia()
createApp(App).use(pinia).use(store).use(router).mount('#app')
