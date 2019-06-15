<template>
    <div class="columns is-multiline">
        <seasons-index-card
          v-for="(project,index) in season.projects"
          :title="project.name"
          :key="project.id"
        >
            <div v-if="project.poster.length > 0">
              <a :href="'/shows/'+project.id">
                <base-image width=400 :image="project.poster[0].photograph.file_name"></base-image>
              </a>
            </div>
            <div v-else class="card">
              <div class="card-content" style="height: 200px;">
                <h3 class="subtitle is-size-5">{{project.name}}</h3>
              </div>
            </div>
        </seasons-index-card>
    </div>
</template>
<script>
  export default {
    props:['season'],
    data() {
      return {
        message: 'hello'
      }
    },
    methods: {

    }
  }
</script>
<style scoped>
    .card-content {
        padding: 0.5rem;
    }
</style>
