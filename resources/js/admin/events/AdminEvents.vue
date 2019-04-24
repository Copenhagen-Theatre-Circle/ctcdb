<template>
    <!-- <admin-base-layout> -->
        <v-layout row>
          <v-flex>
            <v-list two-line>
                <v-text-field
                  label="filter events"
                  prepend-inner-icon="search"
                  class="pl-3 pr-3"
                  v-model="filter"
                ></v-text-field>
                <v-divider></v-divider>
                <template v-for="(event, index) in events" v-if="filter=='' || (event.project !== null && event.project.name.toLowerCase().includes(filter.toLowerCase())) || (event.eventtype !== null && event.eventtype.name.toLowerCase().includes(filter.toLowerCase())) ">
                  <v-list-tile @click="drawer=true">
                    <v-list-tile-avatar>
                      <img src="/images/ctc-favicon.png">
                    </v-list-tile-avatar>
                    <v-list-tile-content>
                      <v-list-tile-title v-if="event.title" v-html="event.title"></v-list-tile-title>
                      <v-list-tile-title v-else-if="event.project !== null" v-html="event.project.name"></v-list-tile-title>
                      <v-list-tile-title v-else-if="event.eventtype !== null" v-html="event.eventtype.name"></v-list-tile-title>
                      <v-list-tile-sub-title v-html="event.date"></v-list-tile-sub-title>
                    </v-list-tile-content>
                  </v-list-tile>
                  <v-divider></v-divider>
                </template>
            </v-list>
            <v-navigation-drawer
                v-model="drawer"
                app
                right
                temporary
                width="700"
            >
            <admin-toolbar></admin-toolbar>
            </v-navigation-drawer>
          </v-flex>
        </v-layout>
    <!-- </admin-base-layout> -->
</template>
<script>
  import axios from 'axios'
  export default {
    data() {
      return {
        filter: '',
        message: 'hello',
        events:'',
        drawer: false,
      }
    },
    methods: {

    },
    mounted () {
        axios
          .get('/admin-api/events')
          .then(response => (this.events = response.data))
    }
  }
</script>
<style scoped></style>
