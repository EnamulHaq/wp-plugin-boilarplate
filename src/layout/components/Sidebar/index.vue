<template>
  <div class="sidebar-container" :class="store.$state.sidebarCollapse ? 'w-[64px]': 'w-[290px]'">
    <el-scrollbar height="100vh">
      <el-menu
          default-active="2"
          :collapse="store.$state.sidebarCollapse"
          active-text-color="#ffd04b"
          background-color="transparent"
          :collapse-transition="false"
          text-color="#fff"
          class="border-none !border-0"
      >
        <el-sub-menu index="1">
          <template #title>
            <el-icon>
              <HomeFilled/>
            </el-icon>
            <span>Dashboard</span>
          </template>
          <el-menu-item-group>
            <template #title><span>Group One</span></template>
            <router-link to="/dashboard">
              <el-menu-item index="1-1">Dashboard</el-menu-item>
            </router-link>
            <router-link to="/form">
              <el-menu-item index="1-2">Form</el-menu-item>
            </router-link>
          </el-menu-item-group>
          <el-menu-item-group title="Group Two">
            <el-menu-item index="1-3">item three</el-menu-item>
          </el-menu-item-group>
          <el-sub-menu index="1-4">
            <template #title><span>item four</span></template>
            <el-menu-item index="1-4-1">item one</el-menu-item>
          </el-sub-menu>
        </el-sub-menu>
        <el-menu-item index="2">
          <el-icon>
            <icon-menu/>
          </el-icon>
          <template #title>Navigator Two</template>
        </el-menu-item>
        <el-menu-item index="3" disabled>
          <el-icon>
            <document/>
          </el-icon>
          <template #title>Navigator Three</template>
        </el-menu-item>
        <el-menu-item index="4">
          <el-icon>
            <setting/>
          </el-icon>
          <template #title>Navigator Four</template>
        </el-menu-item>
      </el-menu>
    </el-scrollbar>
  </div>
</template>

<script setup>
import {Document, HomeFilled, Menu as IconMenu, Setting,} from '@element-plus/icons-vue'
import {useGlobalStore} from '@/store/index.js';

const store = useGlobalStore();

</script>

<style>
.el-menu-vertical-demo:not(.el-menu--collapse) {
  width: 200px;
  min-height: 400px;
}

.sidebar-container {
  transition: width .28s;
  background-color: #304156;
  height: 100%;
  position: fixed;
  font-size: 0;
  top: calc(0% + 100px);
  bottom: 0;
  z-index: 1001;
  overflow: hidden;
  padding-top: 25px;
}

.el-menu.el-menu--popup.el-menu--popup-right-start {
  background: #304156;
}
</style>
