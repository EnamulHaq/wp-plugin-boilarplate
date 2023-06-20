import { createApp } from 'vue'
import { createPinia } from 'pinia'
import ElementPlus from 'element-plus'
import NProgress from 'nprogress';
import './style.css'
import 'element-plus/dist/index.css'
import 'nprogress/nprogress.css' // progress bar style
import router from "./router/index.js"
import App from './App.vue'
const app = createApp(App)
NProgress.configure({ parent: '#app' });
router.beforeEach((to, from, next) => {
    NProgress.start();
    next();
});

// After each route navigation, complete the NProgress loading bar
router.afterEach(() => {
    NProgress.done();
});

app.use(createPinia()).use(ElementPlus).use(router).mount('#app')
