<template>
    <base-layout title="History">
        <section class="section">
          <br>
          <history-tabs activeTab="shows"></history-tabs>
          <div class="columns">
            <div class="column is-6">
              <b-field>
                <b-input v-model="search_query" placeholder="search by show name" icon="search" />
              </b-field>
            </div>
            <div class="column is-6">
              <b-field>
                  <b-select v-model="projecttype_query" placeholder="search show by type" icon="search">
                      <option value="all">all show types</option>
                      <option disabled>__________</option>
                      <option
                          v-for="type in projecttypes"
                          :value="type.id"
                          :key="type.id">
                          {{ type.name }}
                      </option>
                  </b-select>
              </b-field>
            </div>
          </div>
          <div class="columns is-multiline">
            <shows-index-card
              v-for="(project,index) in filter"
              :title="project.name"
              :key="project.id"
            >
            <template v-slot:year>
              <h1 class="has-text-light subtitle">
                &nbsp;<span v-if="index==0 || (projects[index-1].year > project.year)">{{project.year}}</span>
              </h1>
            </template>
            <div v-if="project.poster.length > 0">
              <a :href="'/history/shows/'+project.id">
                <base-image width=400 :image="project.poster[0].photograph.file_name"></base-image>
              </a>
            </div>
            <div v-else class="card" style="height: 285px;">
              <div class="card-content">
                <h3 class="subtitle is-size-5">{{project.name}}</h3>
                <i class="fas fa-theater-masks fa-7x" style="color:#ddd"></i>
              </div>
            </div>
            </shows-index-card>
          </div>
        </section>
    </base-layout>
</template>
<script>
  export default {
    props: ['projects','projecttypes'],
    data(){
      return{
        search_query: this.getUrlVars()["name"],
        projecttype_query: this.getUrlVars()["type"],
      }
    },
    computed: {
      filter: function() {
            var name_re = new RegExp(this.search_query, 'i')
            var projecttype_id_re = new RegExp(this.projecttype_query, 'i')
            var data = []
            var i
            for (i in this.projects) {
              var search_term_name = this.projects[i].name
              if (
                    search_term_name.match(name_re)
                    &&
                    (
                      this.projecttype_query == this.projects[i].projecttype.id
                      ||
                      this.projecttype_query == null
                      ||
                      this.projecttype_query == 'all'
                    )
                  )
              {
                data.push(this.projects[i])
              }
            }
            return data
          }
    },
    methods: {
      getUrlVars() {
          var vars = {};
          var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
              vars[key] = value;
          });
          return vars;
      }
    }
  }
</script>
<style scoped>
    a {
      border: 1px solid darkgrey;
    }
    section {
      background: linear-gradient( rgba(255, 255, 255, 0.4), rgba(255, 255, 255, 0.4) );
      padding-top: 1rem;
      margin-top: 1rem;
    }
</style>
