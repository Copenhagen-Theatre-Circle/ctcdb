<template>
    <v-toolbar
      app
      dark
      fixed
      :clipped-left="$vuetify.breakpoint.mdAndUp"
    >
        <v-toolbar-title style="width: 300px" class="ml-0 pl-0">
            <!-- <v-toolbar-side-icon @click.stop="toggleDrawer()" class="ml-0 pl-0"></v-toolbar-side-icon> -->
            <v-btn icon large @click.stop="toggleDrawer()" class="ml-0 pl-0">
              <v-avatar size="40px" tile>
                <img
                  src="/images/ctc-favicon.png"
                  alt="Vuetify"
                >
              </v-avatar>
            </v-btn>
            <span class="hidden-sm-and-down">Admin</span>
          </v-toolbar-title>
    </v-toolbar>
</template>
<script>
  export default {
    data() {
      return {
        message: 'hello'
      }
    },
    methods: {
        toggleDrawer(){
            eventHub.$emit('toggle-drawer');
        }
    }
  }
</script>
<style scoped></style>
