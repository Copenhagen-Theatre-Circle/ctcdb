<template>
        <v-layout row>
        <v-flex>
        <v-list two-line>
            <v-text-field
              label="filter projects"
              prepend-inner-icon="search"
              class="pl-3 pr-3"
              v-model="filter"
            ></v-text-field>
            <v-divider></v-divider>
            <template v-for="(project, index) in projects" v-if="filter=='' || project.name.toLowerCase().includes(filter.toLowerCase()) ">
              <v-list-tile >
                <v-list-tile-avatar>
                  <img src="/images/ctc-favicon.png">
                </v-list-tile-avatar>
                <v-list-tile-content>
                  <v-list-tile-title v-if="project.name" v-html="project.name"></v-list-tile-title>
                  <v-list-tile-sub-title v-html="project.year"></v-list-tile-sub-title>
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
        projects: ''
      }
    },
    methods: {

    },
    mounted () {
        axios
          .get('/admin-api/projects')
          .then(response => (this.projects = response.data))
    }
  }
</script>
<style scoped></style>
