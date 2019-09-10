<template>
  <v-app>
    <admin-base-layout-toolbar></admin-base-layout-toolbar>
    <admin-base-layout-drawer></admin-base-layout-drawer>
    <v-content>
      <slot></slot>
    </v-content>
  </v-app>
</template>
<script>
  export default {
   data() {
      return {
        drawer: null,
      }
    },
    methods: {

    }
  }
</script>
