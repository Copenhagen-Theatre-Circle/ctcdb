<template>
    <div class="pt-2 pl-3 grey lighten-3">
      <v-tabs slider-color="primary" color="grey lighten-3">
        <v-tab v-for="tab in configData.listTabs" :key="tab.name" @click="$emit('selectTab',tab.queryParameter)">{{tab.name}}</v-tab>
      </v-tabs>
    </div>
</template>
<script>
  export default {
    props: ['configData'],
  }
</script>
