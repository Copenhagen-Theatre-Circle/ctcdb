<template>
  <v-app>
    <admin-toolbar></admin-toolbar>
    <admin-drawer></admin-drawer>
        <v-content>
          <v-container fluid fill-height class="pl-0 pt-0 pr-0">
            <slot></slot>
          </v-container>
        </v-content>
    <!-- <v-footer app></v-footer> -->
  </v-app>
</template>
<script>
  export default {
   data() {
      return {
        drawer: null,
        message: 'hello'
      }
    },
    methods: {

    }
  }
</script>
<style scoped></style>
