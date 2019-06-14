<template>
    <div v-if="project.projects_plays[0].synopsis_programme">
        <div
          class="synopsis"
          v-for="(project_play, key) in project.projects_plays"
          :key="key"
          >
          <h1
              class="subtitle is-size-4"
              :id="'synopsis_'+project_play.play.title.toLowerCase().replace(/[^a-z0-9+]+/gi, '')"
              v-if="project.projects_plays.length > 1"
          >
              {{project_play.play.title}}
          </h1>
          <div
            v-html="project_play.synopsis_programme"
            style="white-space: pre-wrap;"
          ></div>
        </div>
    </div>
</template>
<script>
  export default {
    props:['project']
  }
</script>
<style scoped>
  .synopsis{
    padding-bottom: 1rem;
  }
  h1{
    margin-top: 0.6rem !important;
    margin-bottom: 0.6rem !important;
  }
</style>
