<template>
   <div>
       <div class="banner">
           <div class="rounded-[5px] overflow-hidden">
                <img :src="banner_img" alt="banner_image" />
           </div>
       </div>
   </div>
</template>

<script setup>

import {nextTick, onMounted, ref} from "vue";

const banner_img = ref('');

onMounted(() => {
    banner_img.value = wpvue.url + 'images/dashboard/dashboard-header.png';
})
</script>