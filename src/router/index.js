import { createRouter, createWebHashHistory } from 'vue-router'

export const constantRoutes = [
    {
        path: '/',
        component: () => import('../views/Dashboard.vue'),
        hidden: true
    },

    {
        path: '/form',
        component: () => import('../views/Form.vue'),
        hidden: true
    },

    // {
    //     path: '/404',
    //     component: () => import('@/views/404'),
    //     hidden: true
    // },

    // {
    //     path: '/',
    //     component: Layout,
    //     redirect: '/dashboard',
    //     children: [{
    //         path: 'dashboard',
    //         name: 'Dashboard',
    //         component: () => import('@/views/dashboard/index'),
    //         meta: { title: 'Dashboard', icon: 'Histogram' }
    //     }]
    // },

    // {
    //     path: '/example',
    //     component: Layout,
    //     redirect: '/example/table',
    //     name: 'Example',
    //     meta: { title: 'Example', icon: 'HelpFilled' },
    //     children: [
    //         {
    //             path: 'table',
    //             name: 'Table',
    //             component: () => import('@/views/table/index'),
    //             meta: { title: 'Table', icon: 'Grid' }
    //         },
    //         {
    //             path: 'tree',
    //             name: 'Tree',
    //             component: () => import('@/views/tree/index'),
    //             meta: { title: 'Tree', icon: 'BrushFilled' }
    //         }
    //     ]
    // },
    //
    // {
    //     path: '/form',
    //     component: Layout,
    //     children: [
    //         {
    //             path: 'index',
    //             name: 'Form',
    //             component: () => import('@/views/form/index'),
    //             meta: { title: 'Form', icon: 'Tickets' }
    //         }
    //     ]
    // },
    //
    // {
    //     path: '/nested',
    //     component: Layout,
    //     redirect: '/nested/menu1',
    //     name: 'Nested',
    //     meta: {
    //         title: 'Nested',
    //         icon: 'ToiletPaper'
    //     },
    //     children: [
    //         {
    //             path: 'menu1',
    //             component: () => import('@/views/nested/menu1/index'), // Parent router-view
    //             name: 'Menu1',
    //             meta: { title: 'Menu1' },
    //             children: [
    //                 {
    //                     path: 'menu1-1',
    //                     component: () => import('@/views/nested/menu1/menu1-1'),
    //                     name: 'Menu1-1',
    //                     meta: { title: 'Menu1-1' }
    //                 },
    //                 {
    //                     path: 'menu1-2',
    //                     component: () => import('@/views/nested/menu1/menu1-2'),
    //                     name: 'Menu1-2',
    //                     meta: { title: 'Menu1-2' },
    //                     children: [
    //                         {
    //                             path: 'menu1-2-1',
    //                             component: () => import('@/views/nested/menu1/menu1-2/menu1-2-1'),
    //                             name: 'Menu1-2-1',
    //                             meta: { title: 'Menu1-2-1' }
    //                         },
    //                         {
    //                             path: 'menu1-2-2',
    //                             component: () => import('@/views/nested/menu1/menu1-2/menu1-2-2'),
    //                             name: 'Menu1-2-2',
    //                             meta: { title: 'Menu1-2-2' }
    //                         }
    //                     ]
    //                 },
    //                 {
    //                     path: 'menu1-3',
    //                     component: () => import('@/views/nested/menu1/menu1-3'),
    //                     name: 'Menu1-3',
    //                     meta: { title: 'Menu1-3' }
    //                 }
    //             ]
    //         },
    //         {
    //             path: 'menu2',
    //             component: () => import('@/views/nested/menu2/index'),
    //             name: 'Menu2',
    //             meta: { title: 'menu2' }
    //         }
    //     ]
    // },
    //
    // {
    //     path: '/external-link',
    //     component: Layout,
    //     children: [
    //         {
    //             path: 'https://panjiachen.github.io/vue-element-admin-site/#/',
    //             meta: { title: 'External Link', icon: 'link' }
    //         }
    //     ]
    // },


    // 404 page must be placed at the end !!!
    { path: '/:catchAll(.*)', redirect: '/404', hidden: true }
]

const router = createRouter({
    history: createWebHashHistory('/vue-admin-template-plus/'),
    scrollBehavior: () => ({ y: 0 }),
    routes: constantRoutes
})

export default router
