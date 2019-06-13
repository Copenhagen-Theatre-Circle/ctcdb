<template>
    <div>
        <div
          v-for="project_play in project.projects_plays"
          style="white-space: pre-wrap;"
          v-html="project_play.synopsis_programme">
        </div>
    </div>
</template>
<script>
  export default {
    props:['project']
  }
</script>
<style scoped></style>
