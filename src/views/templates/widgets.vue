<template>
    <div>
        <h1 class="text-[20px] font-[500] text-[#000] mb-[15px]">Widgets</h1>
        <p class="text-[16px] font-medium">Here is the list of our all 124 widgets. You can enable or disable widgets from here to optimize loading speed and Elementor editor experience. After enabling or disabling any widget make sure to click the Save Changes button.</p>
    </div>
    <div class="widget_list mt-[50px]">
        <el-row class="gap-[20px] justify-between">
           <div>
               <el-button plain>All</el-button>
               <el-button type="primary" plain>Free</el-button>
               <el-button color="#e2498a" plain>Pro</el-button>
           </div>
            <div>
                <el-button type="success" plain>Enable all</el-button>
                <el-button type="danger" plain>Disable all</el-button>
            </div>
        </el-row>
    </div>
</template>