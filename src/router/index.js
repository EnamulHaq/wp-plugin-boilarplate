import { createRouter, createWebHashHistory } from 'vue-router'
import Layout from "../layout/index.vue";
export const constantRoutes = [
    {
        path: '/',
        name: 'Dashboard',
        component: () => import('../views/Dashboard.vue'),
        meta: { title: 'Dashboard' }
    },

    // 404 page must be placed at the end !!!
    { path: '/:catchAll(.*)', redirect: '/404', hidden: true }
]

const router = createRouter({
    history: createWebHashHistory('/vue-admin-template-plus/'),
    scrollBehavior: () => ({ y: 0 }),
    routes: constantRoutes,
    linkActiveClass: 'is-active', // Add your desired active class here
    linkExactActiveClass: 'exact-active', // Add your desired exact active class here
})

export default router
