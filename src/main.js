import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import './assets/app.css'

const app = createApp(App).use(router).mount('#app')