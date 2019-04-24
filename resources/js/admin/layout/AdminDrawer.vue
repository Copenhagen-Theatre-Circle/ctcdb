<template>
    <v-navigation-drawer
      app
      fixed
      :clipped="$vuetify.breakpoint.mdAndUp"
      v-model="drawer"
    >
        <template v-for="item in items">
          <v-list class="pt-0" dense>
              <v-list-tile :to="{path: '/admin/' + item.ref}" :key="item.text" dense>
                <v-list-tile-action >
                  <v-icon class="pl-3">{{ item.icon }}</v-icon>
                </v-list-tile-action>
                <v-list-tile-content>
                  <v-list-tile-title
                    class="pl-2 drawer-title"
                    :class="{'active-title': item.ref == activeLink }"
                    >
                    {{ item.text }}
                  </v-list-tile-title>
                </v-list-tile-content>
              </v-list-tile>
          </v-list>
        </template>
    </v-navigation-drawer>


</template>
<script>
  export default {
    created: function () {
      eventHub.$on('toggle-drawer', this.toggleDrawer)
    },
    data() {
      return {
        message: 'hello',
        drawer: true,
        items: [
            { icon: 'event', text: 'Events', ref: 'events' },
            { icon: 'folder_special', text: 'Projects', ref: 'projects' },
            { icon: 'book', text: 'Plays', ref: 'plays' },
        ]
      }
    },
    methods: {
        toggleDrawer(){
          this.drawer = !this.drawer
        },
        href(ref){
          window.location.href = ref
        }
    },
    computed: {
      activeLink(){
        return 'refactor'
      }
    }
  }
</script>
<style scoped>
  .active {
    background-color: rgba(0,0,0,.04);
  }
  .active-icon{
    color: #c42926;
  }
  .drawer-title{
    font-size: 14px;
    font-weight: 400;
  }
  .active-title{
    font-weight: 500;
  }
</style>
