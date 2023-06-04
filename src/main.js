import { createApp } from 'vue'
// import { createPinia } from 'pinia'
import ElementPlus from 'element-plus'
import 'element-plus/dist/index.css'
import './style.css'
import router from "./router/index.js"
import App from './App.vue'
const app = createApp(App)
app.use(ElementPlus).use(router).mount('#app')
