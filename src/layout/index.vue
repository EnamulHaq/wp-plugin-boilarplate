<template>
  <div class="app-wrapper">
<!--    <Sidebar />-->
<!--    <Navbar />-->
<!--    <div class="main-container pt-[70px]" :class="store.$state.sidebarCollapse ? 'ml-[64px]' : 'ml-[290px]'" id="main-container">-->
    <div class="main-container" id="main-container">
      <div class="px-[30px]">
        <app-main />
      </div>
    </div>
  </div>
</template>

<script setup>
import {Sidebar, Navbar, AppMain } from './components'
import {useGlobalStore} from "@/store/index.js";
const store = useGlobalStore();
</script>