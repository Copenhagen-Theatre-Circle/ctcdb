<template>
    <div>
        <div
          v-for="project_play in project.projects_plays"
          style="white-space: pre-wrap;"
          v-html="project_play.directors_statement">
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
<style scoped></style>
