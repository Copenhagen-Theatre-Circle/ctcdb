<template>
    <div>
        <div
          class="statement"
          v-for="project_play in project.projects_plays"
          >
          <h1
              class="subtitle is-size-4"
              :id="'statement_'+project_play.play.title.toLowerCase().replace(/[^a-z0-9+]+/gi, '')"
              v-if="project.projects_plays.length > 1"
          >
              {{project_play.play.title}}
          </h1>
          <div
            v-html="project_play.directors_statement"
            style="white-space: pre-wrap;"
          ></div>
        </div>
    </div>
</template>
<script>
  export default {
    props:['project'],
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
  .statement{
    padding-bottom: 1rem;
  }
  h1{
    margin-top: 0.6rem !important;
    margin-bottom: 0.6rem !important;
  }
</style>
