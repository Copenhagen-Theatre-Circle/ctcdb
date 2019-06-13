<template>
  <div>
    <div v-if="project.photographs['show_stills']">
      <!-- Carousel -->
      <shows-details-carousel :photographs="project.photographs['show_stills']" />
      <div class="titlecard">
      <!-- Carousel -->
        <h1 class="subtitle is-1">{{project.name}}</h1>
      </div>
    </div>
    <div v-else>
        <h1 class="subtitle is-1">{{project.name}}</h1>
    </div>
  </div>

</template>
<script>
  export default {
    props:['project']
  }
</script>
<style scoped lang="scss">
    .titlecard {
        margin-top: -120px;
        margin-bottom: 50px;
        position: relative;
        background: linear-gradient( rgba(120, 120, 120, 0.7), rgba(120, 120, 120, 0.7) );
        color: white !important;
        padding: 1rem;
        h1 {
          color: white;
        }
    }
</style>
