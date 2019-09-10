<template>
    <div>
      <!-- Tabs -->
      <admin-content-record-tabs :tabs="configData.recordTabs" @selectComponent="selectComponent" />
      <!-- Content -->
      <div row class="pl-5 pr-5 pt-3 pb-3 scroll-y white" style="height: calc(100vh - 180px);">
        <admin-content-record-loading v-if="isLoading" />
        <component
          v-else
          v-bind:is="currentTabComponent"
          />
      </div>
      <!-- Save / Cancel Footer -->
      <admin-content-record-footer />
    </div>
</template>
<script>
  import axios from 'axios'
  export default {
    props:['configData'],
    data() {
      return {
        buttonsActive: false,
        currentTabComponent: this.configData.recordTabs[0].component
      }
    },
    computed: {
      isLoading(){
        return this.$store.state.loading
      }
    },
    methods: {
      selectComponent(component){
        this.currentTabComponent = component
      },
    }
  }
</script>
