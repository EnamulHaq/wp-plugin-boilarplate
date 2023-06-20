<template>
  <div class="navbar bg-[#304156] flex items-center justify-between fixed w-full top-[32px] p-[15px] z-[9999]">
    <div class="flex items-center w-[275px] justify-between ">
      <div class="logo h-[40px]">
        <img class="w-full h-full" :src="`${imageUrl}images/logo-1.png`" />
      </div>
      <Humberger class="hamburger-container"/>
    </div>
  </div>
</template>

<script setup>

import Humberger from '../../components/Hamburger/index.vue';
import {onMounted, ref} from "vue";
const imageUrl = ref();
onMounted(() => {
  imageUrl.value = wpvue.url;
});
</script>
<style>
#app .main-container {
  min-height: 100%;
  transition: margin-left .28s;
  position: relative;
  background-color: #fff;
}
</style>

<!--<style lang="scss" scoped>-->
<!--.navbar {-->
<!--  height: 50px;-->
<!--  overflow: hidden;-->
<!--  position: relative;-->
<!--  background: #fff;-->
<!--  box-shadow: 0 1px 4px rgba(0,21,41,.08);-->

<!--  .hamburger-container {-->
<!--    line-height: 46px;-->
<!--    height: 100%;-->
<!--    float: left;-->
<!--    cursor: pointer;-->
<!--    transition: background .3s;-->
<!--    -webkit-tap-highlight-color:transparent;-->

<!--    &:hover {-->
<!--      background: rgba(0, 0, 0, .025)-->
<!--    }-->
<!--  }-->

<!--  .breadcrumb-container {-->
<!--    float: left;-->
<!--  }-->

<!--  .right-menu {-->
<!--    float: right;-->
<!--    height: 100%;-->
<!--    line-height: 50px;-->

<!--    &:focus {-->
<!--      outline: none;-->
<!--    }-->

<!--    :deep(.avatar-container) {-->
<!--      margin-right: 30px !important;-->

<!--      .avatar-wrapper {-->
<!--        margin-top: 5px;-->
<!--        position: relative;-->

<!--        .user-avatar {-->
<!--          cursor: pointer;-->
<!--          width: 40px;-->
<!--          height: 40px;-->
<!--          border-radius: 10px;-->
<!--        }-->

<!--        .el-icon-caret-bottom {-->
<!--          cursor: pointer;-->
<!--          position: absolute;-->
<!--          right: -20px;-->
<!--          top: 25px;-->
<!--          font-size: 12px;-->
<!--        }-->
<!--      }-->
<!--    }-->
<!--  }-->
<!--}-->
<!--</style>-->
