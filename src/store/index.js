// import {defineStore} from "pinia";

// export const useVueAdmin = defineStore('admin_store', {
//     state: () => (
//         {
//             count: 0,
//             name: 'Eduardo'
//         }
//     ),
//     getters: {
//         doubleCount: (state) => state.count * 2,
//     },
//     actions: {
//         increment() {
//             this.count++
//         },
//     },
// })

import {defineStore} from "pinia";

export const useGlobalStore = defineStore({
    id: 'globalStore',
    state: () => ({
        sidebarCollapse: false,
    }),
    actions: {
        collapsedSidebar() {
            this.sidebarCollapse = !this.sidebarCollapse
        }
    }
})