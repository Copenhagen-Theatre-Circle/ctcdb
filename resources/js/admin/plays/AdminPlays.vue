<template>
        <v-layout row>
          <v-flex>
            <v-list two-line>
                <v-text-field
                  label="filter plays"
                  prepend-inner-icon="search"
                  class="pl-3 pr-3"
                  v-model="filter"
                ></v-text-field>
                <v-divider></v-divider>
                <template v-for="(play, index) in plays" v-if="filter=='' || play.title.toLowerCase().includes(filter.toLowerCase()) ">
                  <v-list-tile >
                    <v-list-tile-avatar>
                      <img src="/images/ctc-favicon.png">
                    </v-list-tile-avatar>
                    <v-list-tile-content>
                      <v-list-tile-title v-if="play.title" v-html="play.title"></v-list-tile-title>
                      <v-list-tile-sub-title v-html="play.year"></v-list-tile-sub-title>
                    </v-list-tile-content>
                  </v-list-tile>
                  <v-divider></v-divider>
                </template>
              </v-list>
            </v-flex>
        </v-layout>
</template>
<script>
  import axios from 'axios'
  export default {
    data() {
      return {
        filter: '',
        plays: '',
      }
    },
    methods: {

    },
    mounted () {
        axios
          .get('/admin-api/plays')
          .then(response => (this.plays = response.data))
    }
  }
</script>
<style scoped></style>
