<template>
    <div>
      <admin-content-list-tabs v-if="configData.listTabs" :configData="configData" @selectTab="selectTab" />
      <admin-content-list-records :configData="configData" :selectedTabQuery="selectedTabQuery" :key="tabModCount" />
      <admin-content-list-newrecord v-if="configData.createRecord" :configData="configData" />
    </div>
</template>
<script>
  export default {
    props: ['configData'],
    data() {
      return {
        tabModCount: 0,
        selectedTabQuery: this.configData.listTabs ? this.configData.listTabs[0].queryParameter : ''
      }
    },
    methods: {
        selectTab(input){
            this.selectedTabQuery = input
            this.tabModCount++
        }
    }
  }
</script>
<style scoped></style>
