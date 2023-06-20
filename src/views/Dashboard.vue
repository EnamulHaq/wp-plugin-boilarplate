<template>
    <div class="test">
        <div class="settings-save-btn save_button" ref="btn">
            <el-button color="#626aef">Save Changes</el-button>
        </div>
        <div ref="tabs">
            <el-tabs v-model="activeName" class="bd_admin_panel" @tab-click="handleClick">
                <el-tab-pane label="Home" name="first">
                    <Dashboard />
                </el-tab-pane>
                <el-tab-pane label="Widgets" name="second">
                    <Widgets />
                </el-tab-pane>
                <el-tab-pane label="Settings" name="fourth">Settings</el-tab-pane>
                <el-tab-pane label="Features" name="five">Features</el-tab-pane>
                <el-tab-pane label="Pro" name="third">Pro</el-tab-pane>
            </el-tabs>
        </div>
        <div class="mt-[30px] save_button">
            <el-button color="#626aef">Save Changes</el-button>
        </div>
    </div>
</template>
<script setup>
import Dashboard from "@/views/templates/dashboard.vue";
import {nextTick, onMounted, ref} from 'vue'
import Widgets from "@/views/templates/widgets.vue";

const activeName = ref('first')
const btn = ref(null)
const tabs = ref(null)

const handleClick = (tab, event) => {
    console.log(tab, event)
}

onMounted(async () => {
    await nextTick();
    // setTimeout(() => insertButton(), 100)
    insertButton();
    // console.log(nextTick)
})

const insertButton = () => {
    let tabs_el = tabs.value.querySelector('.el-tabs__nav-scroll')
    tabs_el.appendChild(btn.value)
}


</script>
<style>
.el-tabs.el-tabs--top.bd_admin_panel {
    height: 100%;
    padding-top: 25px;
}

.el-tabs__header.is-top {
    margin: 0;
    border: none;
}

.bd_admin_panel > .el-tabs__content {
    height: 100%;
    /* display: none; */
    padding: 40px 20px;
    border-radius: 0 0 5px 5px;
    background-color: #fff;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
    box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
}

.el-tabs__nav-wrap::after {
    display: none !important;
}

.el-tabs__nav-scroll {
    display: flex;
    justify-content: space-between;
}

.save_button button {
    padding-top: 12px;
    padding-bottom: 12px;
    height: auto;
}
</style>